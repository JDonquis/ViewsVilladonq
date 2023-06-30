let next_id = 4
const users = [
  {
    id: 1,
    type_user_id: 3,
    DNI: 27253194,
    name: "Juan Francisco",
    last_name: "Villasmil Tovar",
    email: "juanvillans16@gmail.com",
    phone_number: "04124393123",
    date_birth: "1999-02-06",
    address: "Conjunto residencial Juan Crisóstomo Falcón",
    state: "Falcón",
    city: "Coro",
    type_user: "admin",
  },
  {
    id: 2,
    type_user_id: 4,
    DNI: 10993194,
    name: "Rosa meste",
    last_name: "melo hernandez",
    email: "rosamelo6@gmail.com",
    phone_number: "04124393123",
    date_birth: "2009-03-06",
    address: "Funda Barrio calle 13",
    state: "Falcón",
    city: "Coro",
    type_user: "docente",
  },
  {
    id: 3,
    type_user_id: 5,
    DNI: 10993194,
    name: "leonsi",
    last_name: "Breick",
    email: "leonsi4346@gmail.com",
    phone_number: "04124393123",
    date_birth: "2012-01-08",
    address: "Tikinti",
    state: "Falcón",
    city: "Coro",
    type_user: "docente-admin",
  },
];

document.onclick = (e) => {
  const el = e.target;

  if (el.tagName === "td") {
    // if (el.)
  }
};

const table = $("table");
table
  .DataTable({
    //   data: users,
    //   columns: [
    //      { data: "name" },
    //      { data: "last_name" },
    //      { data: "DNI" },
    //      { data: "email" },
    //      { data: "phone_number" },
    //      { data: "date_birth" },
    //      { data: "state" },
    //      { data: "city" },
    //      { data: "address" },
    //      { data: "type_user" },
    //      { data: `<i class="fas fa-edit" title="Editar"></i> <i class="fa-trash-can far" title="Eliminar"></i>` },
    //     //  { data: "email" }
    //   ],
    responsive: true,
    lengthChange: false,
    autoWidth: false,
    paging: false,
    ordering: true,
    buttons: ["excel", "pdf", "print"],
  })
  .buttons()
  .container()
  .prependTo(".dataTables_filter");

function loadTable() {
  $("table")
  .DataTable().clear()
  users.forEach((u) => {
    const actions = `<span class="actions"> <i class="fas fa-edit" title="editar" data-id="${u.id}"></i> <i class="fa-trash-can far ${u.id}"></i> </span>`;
    $("table")
      .DataTable()
      .row.add([
        u.name,
        u.last_name,
        u.DNI,
        u.email,
        u.phone_number,
        u.date_birth,
        u.state,
        u.city,
        u.address,
        u.type_user,
        actions,
      ])
      
  });
  $("table")
  .DataTable().draw()
  .responsive.recalc();
}


loadTable();

// inputs of the form
const inp_id = document.querySelector('#id_user');

const inp_name = document.querySelector("#name");
const inp_last_name = document.querySelector("#last_name");
const inp_date_birth = document.querySelector("#date_birth");
const inp_DNI = document.querySelector("#DNI");
const inp_email = document.querySelector("#email");
const inp_tel = document.querySelector("#tel");
const inp_state = document.querySelector("#state");
const inp_city = document.querySelector("#city");
const inp_address = document.querySelector("#address");

// rol can be student, admin, custom
let rol = "";
const check_admin = document.querySelectorAll("#Administrador input");
const check_professor = document.querySelectorAll("#Docente input");
const option_per = document.querySelector("#option_per");
const option_adm = document.querySelector("#option_adm");
const option_pro = document.querySelector("#option_pro");
const select_rol = document.querySelector("#roles");
const modal = document.querySelector(".modal");
const isAnyoneChecked = (checkbox) => [...checkbox].some((el) => el.checked);


function animateUpdateRow(id){
  const i = document.querySelector(`i[data-id="${id}"]`);
  const tr = i.closest('tr')
  tr.classList.add('bg-1')
  setTimeout(() => {
    tr.classList.remove('bg-1')
  
  }, 600);
}

function clearInputs(){
  document.querySelectorAll(".card_form span input").forEach((inp) => (inp.value = ""));
}

document.onclick = (e) => {
  const el = e.target;

  if(el.id == 'btn_open_form'){

  }


  // click en guardar usuario
  if (el.classList.contains("btn_submit")) {
    const user_indx = users.findIndex((u) => u.id == inp_id.value);

    if (user_indx >= 0) {
      //edit: ***************************
      users[user_indx] = {
        id: +inp_id.value,
        // type_user_id:,
        DNI: inp_DNI.value,
        name: inp_name.value,
        last_name: inp_last_name.value,
        email: inp_email.value,
        phone_number: inp_tel.value,
        date_birth: inp_date_birth.value,
        address: inp_address.value,
        state: inp_state.value,
        city: inp_city.value,
        type_user: select_rol.value,
      };
      
      loadTable()
      animateUpdateRow(+inp_id.value)

    } else {
      //create: ************************
      users.push({
        id: next_id,
        // type_user_id:,
        DNI: inp_DNI.value,
        name: inp_name.value,
        last_name: inp_last_name.value,
        email: inp_email.value,
        phone_number: inp_tel.value,
        date_birth: inp_date_birth.value,
        address: inp_address.value,
        state: inp_state.value,
        city: inp_city.value,
        type_user: select_rol.value,
      })
      animateUpdateRow(next_id++)
      clearInputs()

    }

    
    console.log(user_indx);
    

    // const new_row = [...document.querySelectorAll(".card_form span input")].map(
    //   (inp) => inp.value
    // );
    // new_row.push(select_rol.value);
    // const actions = `<i class="fas fa-edit" title="editar"></i> <i class="fa-trash-can far"></i>`;
    // $("table")
    //   .DataTable()
    //   .row.add([...new_row, actions])
    //   .draw(false);
    // document
    //   .querySelectorAll(".card_form span input")
    //   .forEach((inp) => (inp.value = ""));
    $(".modal").modal("hide");
  }

  //click in edit icon
  if (el.classList.contains("fa-edit")) {
    $(".modal").modal("show");

    const user = users.find((u) => u.id == el.dataset.id);

    //fill the inputs with the user data
    inp_id.value = user.id
    inp_name.value = user.name;
    inp_last_name.value = user.last_name;
    inp_date_birth.value = user.date_birth;
    inp_DNI.value = user.DNI;
    inp_email.value = user.email;
    inp_tel.value = user.phone_number;
    inp_state.value = user.state;
    inp_city.value = user.city;
    inp_address.value = user.address;

    document.querySelectorAll(".card_form input").forEach((input) => {
      if (input.type !== "file" && input.type !== "submit") {
        if (input.value) {
          input.nextElementSibling.classList.add("focus_valid");
          if (input.type === "date") {
            input.classList.add("focus_valid");
          }
        }
      }
    });
  }
};

document.onchange = (e) => {
  const el = e.target;
  if (el.type == "checkbox") {
    const just_selected = el.closest("section").id;
    el.checked == true
      ? el.parentElement.classList.add("color-4")
      : el.parentElement.classList.remove("color-4");

    if (isAnyoneChecked(check_admin) && isAnyoneChecked(check_professor)) {
      rol = "docente-administrador";
      option_per.selected = true;
      return;
    } else {
      document.querySelector("#option_sel").selected = true;
    }
    if (isAnyoneChecked(check_admin)) {
      option_adm.selected = true;
      return;
    }
    if (isAnyoneChecked(check_professor)) {
      option_pro.selected = true;
      return;
    }
  }

  if (el.id === "roles") {
    const opt_value = el.value;
    document.querySelectorAll(`input[type="checkbox"]`).forEach((input) => {
      if (input.closest("section").id  == opt_value) {
        input.checked = true;
        input.parentElement.classList.add("color-4");
      } else {
        input.checked = false;
        input.parentElement.classList.remove("color-4");
      }
    });
  }
};
