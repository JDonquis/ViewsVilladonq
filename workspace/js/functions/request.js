const d = document;
let table = d.querySelector("#table-request"),
  new_content,
  btn_status = "",
  status = "";

let filer_btns = d.querySelectorAll(".filter")

// const action_th = d.querySelector("#action_th")
// action_th.classList.add('d-none')

function updateTable(users_arr) {
  new_content = document.createDocumentFragment();

  users_arr
    .map((obj) => Object.values(obj))
    .forEach((el) => {
      if (el[1] == 1) {
        status = "Aceptado";
        btn_status = "d-none";
      } else if (el[1] == 2) {
        status = "Rechazado";
        btn_status = "d-none";
      } else if (el[1] == 3) {
        status = "En espera";
        btn_status = "";
      }
      let tr = document.createElement("tr");
      tr.innerHTML = `
                     <td class="${status}">${status}</td>
                     <td>${el[2]}</td>
                     <td>${el[3]}</td>
                     <td>${el[6]}</td>
                     <td>${el[5]}</td>
                     <td>
                     <button type="button" class="btn btn-request ${btn_status}"  btn-action="add" id-user="${el[0]}">Aceptar</button>
                     <button type="button" class="btn btn-request ${btn_status}" btn-action="delete"  id-user="${el[0]}">Rechazar</button>
                     
                  </td>
                `;

      new_content.append(tr);
    });
  table.replaceChildren(new_content);
}

function save_selection() {
  localStorage.setItem("skip_message", "1");
}

export function request_action(btn) {
  // localStorage.removeItem("skip_message");
  let v = 1;
  d.addEventListener("click", (e) => {
    if (e.target.matches(btn)) {
      const button = e.target;
      const id = button.getAttribute("id-user");
      const action = button.getAttribute("btn-action");
      let r = 0;

      if (!localStorage.getItem("skip_message")) 
      {
        const box_message = d.querySelector(".message-box");

        box_message.classList.add("box-active");

        box_message.addEventListener("click", (e) => {
          if (e.target.matches("#confirm")) {
            box_message.classList.remove("box-active");
            r = 1;
            if (d.querySelector("#show_confirm").value == 1) save_selection();

            request(id, action);
          }

          if (e.target.matches("#back")) {
            box_message.classList.remove("box-active");
            r = 0;
            if (d.querySelector("#show_confirm").value == 1) save_selection();
          }

          if (e.target.matches("#show_confirm")) {
            e.target.value = v;
            v = v * -1;
          }

          // r==1?request(id,action):0;
        });
      } else{ request(id, action); }
    }
  });
}

function request(id, action) {


  $.ajax({
    url:
      "../../controller/request_controller.php?id_user="+id+"&action="+action,
    async: true,
    dataType: "json",
    success: function (resp) {
      switch (action) {
        case "add":
          resp ? updateTable(resp) : table.replaceChildren()
          break;

        case "delete":
          resp ? updateTable(resp) : table.replaceChildren()
          break;

        default:
          alert("No se encontro la accion");
          break;
      }
    },
  });
}


export function filter(btn) {
  d.addEventListener("click", (e) => {
    if (e.target.matches(btn)) {
      let button = e.target
      const id = button.id;
      filer_btns.forEach(btn => btn.classList.remove('active'))
      button.classList.add('active')

      $.ajax({
        url: "../../controller/request_controller.php?filter=" + id,
        async: true,
        dataType: "json",

        success: (resp) =>  resp ? updateTable(resp) : table.replaceChildren()
      });
    }
  });
}
