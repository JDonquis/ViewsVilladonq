import lesson from "../functions/lesson.js";
import send_plan from "../functions/send_plan.js";
import disableInputs from '../functions/disableInputs.js'

lesson("#input-id", "#matters_select", "#years_select");
send_plan("#plan-form", "#lesson", "#save-form");
const all_select = document.querySelectorAll('select');
console.log(all_select)
disableInputs(all_select)
let all_row = document.querySelectorAll("tbody tr");
let table = document.querySelector("table");
let tbody = document.querySelector("tbody");
const tfoot = document.querySelector("tfoot");
let n_unidades = all_row.length;
$("#N_uni")[0].value = n_unidades;
let textareasTable = document.querySelectorAll("tbody textarea");
const move_hist_btns = document.querySelector(".move_hist_btns");
const past_btn = document.querySelector(".past");
const future_btn = document.querySelector(".future");
const form = document.querySelector(".row_table_plan");
let allow = true;

if (form.classList.contains("disable_edit")) {
  textareasTable.forEach((t) => (t.disabled = true));
}

document.querySelector("body").onclick = (e) => {
  const el = e.target;
  if (!form.classList.contains("disable_edit")) {
    if (el.classList.contains("btn_more")) {
      console.log(form);
      addRow();
    }
  }
  if (el.id === "edit_button") {
    form.classList.remove("disable_edit");
    textareasTable.forEach((t) => (t.disabled = false));
    document.querySelector(".ribbon-wrapper").remove();
    el.remove();
  }
  if (el.classList.contains("borrar_btn")) {
    deleteRow(el.closest("tr"));
  }
  if ((el.tagName == "TD")) {
    const texta = el.querySelector("textarea")
    if (texta) texta.focus()
  }
};

function textareasFuctions(firts_time = false) {
  textareasTable = document.querySelectorAll("tbody textarea");
  textareasTable.forEach((t) => {
    if (firts_time) adjustTextareaHight(t);
    t.oninput = () => {
      adjustTextareaHight(t);
    };
    t.onchange = () => {
      if (allow) {
        getData();
        allow = true;
      }
    };
  });
}

function adjustTextareaHight(t) {
  t.style.height = "auto";
  let scrollH = t.scrollHeight;
  t.style.height = `calc(${scrollH}px + 12px )`;
  allow = true;
}
textareasFuctions(true);

function addRow(get_data = true) {
  let tr = document.createElement("tr");
  let new_n = n_unidades + 1;
  tr.dataset.unity = new_n;
  const tds = `<td class="text-bold td_unidad">${new_n}
                </td>
                <td class="each_cell"><textarea name="tema${new_n}" id=""></textarea></td>
                <td class="each_cell"><textarea name="contenido${new_n}" id=""></textarea></td>
                <td class="each_cell"><textarea name="estrategia${new_n}" id=""></textarea></td>
                <td class="td_valor p-0"><textarea name="valor${new_n}" id="" class="new">18+2</textarea>
                    </td>
                    <td class="borrar text-center"><i class="borrar_btn fa-solid fa-xmark" id="br${new_n}"></i></td>`;

  tr.innerHTML = tds;
  tbody.append(tr);
  $(tr).slideDown();
  let new_tema = document.getElementsByName(`tema${new_n}`)[0];
  new_tema.focus();
  textareasFuctions();
  // focusWithClick()
  n_unidades++;
  // deleteRow()
  all_row = document.querySelectorAll("tbody tr");
  allow = false;
  if (get_data) getData();
  $("#N_uni")[0].value = n_unidades;
}

// delete row
function deleteRow(tr) {
  tr.classList.add("removing");
  const unity_row = +tr.dataset.unity;
  setTimeout(() => {
    tr.remove();
    for (let j = unity_row; j < n_unidades; j++) {
      let edit_tr = document.querySelector(`tr[data-unity="${j + 1}"]`);
      console.log(edit_tr);
      edit_tr.dataset.unity = j;
      edit_tr.children[0].textContent = j;
    }
    n_unidades--;
    getData();
  }, 200);
  $("#N_uni")[0].value = n_unidades;
}
// deleteRow()
// save data for then go back or next

let history = [];
let now = "";

function getData() {
  let new_data = {
    n_unidades: n_unidades,
    values: [...textareasTable].map((t) => t.value),
  };
  if (now < history.length - 1) {
    history.splice(now + 1, history.length - (now + 1), new_data);
    future_btn.classList.add("disabled");
  } else {
    history.push(new_data);
  }
  if (now > 19) history.shift();
  now = history.length - 1;
  past_btn.classList.remove("disabled");
  if (now < 1) past_btn.classList.add("disabled");
}
getData();

const goBack = () => {
  if (now > 0) {
    moveHist(history[--now]);
    future_btn.classList.remove("disabled");
  }
  if (now == 0) past_btn.classList.add("disabled");
};

const goNext = () => {
  if (now < history.length - 1) {
    moveHist(history[++now]);
    past_btn.classList.remove("disabled");
  }
  if (now == history.length - 1) future_btn.classList.add("disabled");
};

function moveHist(arr) {
  tbody.replaceChildren();
  n_unidades = 0;
  for (let i = 0; i < arr["n_unidades"]; i++) {
    addRow(false);
  }
  textareasTable.forEach((t, i) => (t.value = arr["values"][i]));

  textareasFuctions(true);
}

// document.querySelector(".btn_more").onclick = () => addRow()

//  shortcuts
document.addEventListener("keydown", (e) => {
  // to add new row ( new unite )
  if (!form.classList.contains("disable_edit")) {
    if (e.key.toLowerCase() === "enter" && e.ctrlKey) {
      e.preventDefault();
      addRow();
    }
    // to go back
    if (e.key.toLowerCase() === "z" && e.ctrlKey) {
      e.preventDefault();
      goBack();
    }
    // to go next
    if (e.key.toLowerCase() === "y" && e.ctrlKey) {
      e.preventDefault();
      goNext();
    }
    // save
    if (e.key.toLowerCase() === "s" && e.ctrlKey) {
      e.preventDefault();
      form.submit();
    }
  }
});
