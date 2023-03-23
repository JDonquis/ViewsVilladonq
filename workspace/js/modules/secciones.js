const abc = [
  "A",
  "B",
  "C",
  "D",
  "E",
  "F",
  "G",
  "H",
  "i",
  "j",
  "k",
  "l",
  "m",
  "n",
  "o",
  "p",
  "q",
  "r",
  "s",
  "t",
  "u",
  "v",
  "w",
  "x",
  "y",
  "z",
];
const allTables = document.querySelectorAll("table");
const all_btn_change_solo = document.querySelectorAll(".btn_change_solo");
const total_rooms = document.querySelector("#total_rooms");
const total_sections = document.querySelector("#total_sections");
const free_classrooms = document.querySelector("#free_classrooms");
const add_btns = document.querySelectorAll(".add_btn");
const all_years = document.querySelectorAll(".each_year");
const parent_content = document.querySelector(".content");
const wrapper = document.querySelector(".content-wrapper");
const history = [];
let now_history = "";
const yearSelect = document.querySelector("#yearInput")

total_rooms.oninput = () => {
  free_classrooms.textContent = total_rooms.value - total_sections.textContent;
};
function saveHistory() {
  let content = document.querySelector("#content_itself");
  if (now_history < history.length - 1) {
    history.splice(
      now_history + 1,
      history.length - (now_history + 1),
      content.outerHTML
    );
  } else {
    history.push(content.outerHTML);
  }
  // history.push(content.outerHTML)
  now_history = history.length - 1;
  if (now_history > 25) history.shift();
  now_history = history.length - 1;
  // if (now_history < 1) past.classList.add("disabled");
}
setTimeout(() => {
  saveHistory();
}, 500);

function moveHistory() {
  const section = document.createElement("section");
  section.classList.add("content");
  section.innerHTML = history[now_history];
  wrapper.replaceChild(section, document.querySelector(".content"));
  document.querySelectorAll("table").forEach((table) => {
    $(`table[data-section="${table.dataset.section}"`).DataTable({
      responsive: true,
      lengthChange: false,
      autoWidth: false,
      paging: false,
      ordering: true,
      columnDefs: [
        {
          orderable: false, // set orderable false for selected columns
          targets: [0, 1], // column index (start from 0)
          content: "",
        },
      ],
    });
  });
}

function disableOrNotAddBtnSections() {
  if (total_sections.textContent >= total_rooms.value) {
    for (const btn of add_btns) btn.classList.remove("d-block");
  } else {
    for (const btn of add_btns) btn.classList.add("d-block");
  }
}
disableOrNotAddBtnSections();

function updateNroStudents(section, print = true) {
  const n_students = $(`table[data-section="${section}"]`)
    .DataTable()
    .data()
    .rows()
    .count();
  if (print == true) {
    document.querySelector(
      `.matricule[data-section="${section}"]`
    ).textContent = n_students;
  }
  return n_students;
}

function addDeleteIcon() {
  const n_sections = document.querySelector(`.nSectionsByYear`).textContent;
  const actual_delete_icon = document.querySelector(`.delete_icon`);
  if (actual_delete_icon) {
    actual_delete_icon.remove();
  }
  if (n_sections > 1) {
    const delete_icon = document.createElement("i");
    delete_icon.classList.add("ml-3", "delete_icon", "fas", "fa-trash-can");
    delete_icon.title = "Eliminar sección";
    // delete_icon.dataset.year = year
    delete_icon.dataset.section = `${abc[n_sections - 1]}`;
    document
      .querySelectorAll(`.each_section h4`)
      [n_sections - 1].append(delete_icon);
  }

  // delete_icons.forEach(delete_icon => {
  // 	delete_icon.classList.add('d-none')
  // })
  // delete_icons[delete_icons.length-1].classList.remove('d-none')
}

addDeleteIcon();

function newTable(year, section) {
  return `
	
		
            <div class="mx-auto each_section_header">
                <h4 class="h5">Sección ${year}${section}</h4>
                <p>matricula: <b class="matricule" data-section="${section}">0</b></p>
            </div>
        
        <div class="table-responsive" >
            
            <table data-section="${section}" data-year="${year}" class="table display position-relative table-head-fixed text-nowrap table-striped table-bordered">
                
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Nombres </th>
                        <th>Apellidos</th>
                        <th>Foto</th>
                        <th>Cedula</th>
                        <th>Edad</th>
                        <th>Tel del representante</th>
                        <th>correo</th>
                        <th data-priority="1">acción</th>
                    </tr>
                </thead>
                <tbody>

                    
                </tbody>
			</table>
		</div>
	
`;
}

let selected_for_change_one = {};
let tables_selected = [];
const data = [{}];

const change_box = document.querySelector(`.change_box`);
const select = change_box.querySelector(`select`);

let status_change_box = 0;

// function to get the data of all students
function getDataStudents() {
	console.log(document.querySelectorAll("[data-id]"))
  return [...document.querySelectorAll("[data-id]")].map((el) => {
    return {
      id: el.dataset.id,
      ano: yearSelect.value,
      seccion: el.closest("table").dataset.section,
    };
  });
}

document.querySelector("body").onclick = (e) => {
  const el = e.target;

  if (el.classList.contains("nav-link")) {
    const table = $(`table[data-section="${el.textContent}"`).DataTable();
    setTimeout(() => {
      table.responsive.recalc();
    }, 50);
  }
  if (
    !el.classList.contains("btn_change_solo") &&
    el.closest(".tooltip_child") != change_box &&
    !btn_change_all.classList.contains("active")
  ) {
    change_box.classList.remove("d-block");
    status_change_box = 0;
    selected_for_change_one.tr?.querySelector("i").classList.remove("color-4");
  }

  //btn guardar
	if (el.id === 'guardar'){
		console.log(getDataStudents())
	}

  // event: click on crear una nueva sección ************************************+
  if (el.classList.contains("add_btn")) {
    const section = abc[document.querySelector(".nSectionsByYear").textContent];

    const year = document.querySelector("#yearInput").value;
    const article = document.createElement("article");
    document.querySelector(".tab-pane.active")?.classList.remove("active");
    document
      .querySelector(".sections_nav a.active")
      ?.classList.remove("active");
    article.classList.add("each_section", "tab-pane", "active");
    article.id = section;
    article.dataset.section = section;

    const li = document.createElement("li");
    li.classList.add("nav-item");
    li.innerHTML = `
		<a class="nav-link active" href="#${section}" data-toggle="tab">${section}</a>
		`;
    document.querySelector(".sections_nav").append(li);
    // console.log(document.querySelector('.sections_nav'))
    article.innerHTML = newTable(year, section);
    document.querySelector(".tab-content").append(article);

    $(`table[data-section="${section}"`).DataTable({
      responsive: true,
      lengthChange: false,
      autoWidth: false,
      paging: false,
      ordering: true,
      columnDefs: [
        {
          orderable: false, // set orderable false for selected columns
          targets: [0, 1], // column index (start from 0)
          content: "",
        },
      ],
    });

    let nSections = ++document.querySelector(".nSectionsByYear").textContent;
    document.querySelector(`.nSectionsByYear`).textContent = nSections;
    UpdateOptionsSections();
    ++total_sections.textContent;
    --free_classrooms.textContent;

    disableOrNotAddBtnSections();
    addDeleteIcon();
    saveHistory();
    toastr.success(`Se ha creado la sección: ${year + section} exitosamente`);
  }

  // event: click on icon change section
  if (el.classList.contains("btn_change_solo")) {
    change_box.classList.add("d-block");
    change_box.classList.remove("position-fixed");

    change_box.style.top = `${
      window.pageYOffset + el.getBoundingClientRect().top - 110
    }px`;
    // change_box = change_box;
    // const selected_table = el.closest('table')
    const actual_table = el.closest("table");
    // const actual_year = actual_table.dataset.year;

    all_btn_change_solo.forEach((i) => i.classList.remove("color-4"));
    el.classList.add("color-4");
    btn_change_all.classList.remove("active");

    UpdateOptionsSections();
    selected_for_change_one = {
      table_section: actual_table.dataset.section,
      tr: el.closest("tr"),
    };
 	    // const isThere = tables_selected.findIndex(obj => obj.table == selected_table)
    // if (isThere != -1) {
    // 	tables_selected[isThere].students.push(el.closest('tr'))
    // } else {
    // 	tables_selected.push({table: selected_table, students: [el.closest('tr')]})
    // }
  }

  // event: click on a acpet change
  if (el.classList.contains("btn_change_acept")) {
    if (btn_change_all.classList.contains("active")) {
      let first =
        tables_selected[0].students[0].querySelectorAll("td")[2].textContent;
      let nro_students = 0;

      tables_selected.forEach((obj) => {
        let origin = $(`table[data-section="${obj.table_section}"`).DataTable();

        let new_data = origin.rows(obj.students).data();
        nro_students += obj.students.length;
        let destiny_table = $(
          `table[data-section="${select.value}"`
        ).DataTable();
        destiny_table.rows.add(new_data).draw().responsive.recalc();
        origin.rows(obj.students).remove().draw();

        change_box.classList.remove("d-block");
        btn_change_all.classList.add("d-none");
        btn_change_all.classList.remove("active");
        updateNroStudents(obj.table_section);
        updateNroStudents(select.value);

        tables_selected = [];
        check_selected_in_year = false;
      });
      // if (nro_students > 1) toastr.success(`Se cambió a ${first} a la sección ${select.value}`)
      // else
      if (nro_students == 1) {
        toastr.success(`Se cambió a ${first} a la sección ${select.value}`);
      } else if (nro_students == 2) {
        toastr.success(
          `Se cambió a ${first} y un estudiante más a la sección ${select.value}`
        );
      } else {
        toastr.success(
          `Se cambió a ${first} y ${--nro_students} estudiantes más a la sección ${
            select.value
          }`
        );
      }
    } else {
      const origin_table = $(
        `table[data-section="${selected_for_change_one.table_section}"`
      ).DataTable();
	  const name_student = selected_for_change_one.tr.querySelector(`[data-id]`).textContent
      let new_data = origin_table.row(selected_for_change_one.tr).data();
      let destiny_table = $(`table[data-section="${select.value}"`).DataTable();
      destiny_table.row.add(new_data).draw().responsive.recalc();
      change_box.classList.remove("d-block");
	  toastr.success(`Se cambió a ${name_student} a la sección ${select.value}`);

      // selected_for_change_one.table.a(status_change_box)
      origin_table.row(selected_for_change_one.tr).remove().draw();
      updateNroStudents(selected_for_change_one.table_section);
      updateNroStudents(select.value);
      selected_for_change_one = {};
    }

    saveHistory();
  }

  // Click on acept multiple students for change of sections ****************************************
  if (el.classList.contains("btn_change_all")) {
    change_box.style.top = `${el.getBoundingClientRect().top - 110}px`;
    change_box.classList.add("position-fixed");
    btn_change_all.classList.toggle("active");

    if (btn_change_all.classList.contains("active")) {
      change_box.classList.add("d-block");
    } else {
      change_box.classList.remove("d-block");
    }
    UpdateOptionsSections();
    saveHistory();
  }

  // delete a section *******************************************************
  if (el.classList.contains("delete_icon")) {
    const table = $(`table[data-section="${el.dataset.section}"]`).DataTable();
    const n_students = table.data().rows().count();
    // const n_sections = --document.querySelector(`.add_btn[data-year="${el.dataset.year}"]`).dataset.nsections

    if (n_students > 0) {
      for (let i = 0; i < n_students; i++) {
        const div_sections = [...document.querySelectorAll(`.matricule`)].map(
          (b) => b.textContent + b.dataset.section
        );
        div_sections.pop();
        const section = div_sections.sort()[0].substring(1);
        const row = table.row(i).data();
        const destiny_table = $(`table[data-section="${section}"]`).DataTable();
        destiny_table.row.add(row).draw().responsive.recalc();
        updateNroStudents(section);
      }
    }

    document
      .querySelector(`article[data-section="${el.dataset.section}"]`)
      .remove();
    document
      .querySelector(`.sections_nav a[href="#${el.dataset.section}"]`)
      .remove();
    --document.querySelector(`.nSectionsByYear`).textContent;
    --total_sections.textContent;
    ++free_classrooms.textContent;

    disableOrNotAddBtnSections();
    addDeleteIcon();
    saveHistory();
    toastr.success(
      `Se ha eliminado la sección ${el.dataset.section} exitosamente`
    );
  }


};
// </ ---------- finish click on body
const btn_change_all = document.querySelector(".btn_change_all");
let check_selected_in_year = false;

document.onchange = (e) => {
  const el = e.target;

  if (el.type === "checkbox") {
    const selected_table = el.closest("table");

    const allCheckboxOfSelectedYear = selected_table.querySelectorAll(
      `table input[type=checkbox]`
    );
    const tr = el.closest("tr");

    tr.classList.toggle("active");
    const isThere = tables_selected.findIndex(
      (obj) => obj.table_section == selected_table.dataset.section
    );
    if (el.checked === true) {
      if (isThere != -1) {
        tables_selected[isThere].students.push(el.closest("tr"));
      } else {
        tables_selected.push({
          table_section: selected_table.dataset.section,
          students: [el.closest("tr")],
        });
      }
    } else {
      const indexDelete = tables_selected[isThere].students.indexOf(tr);
      if (indexDelete != -1)
        tables_selected[isThere].students.splice(indexDelete, 1);
    }

    if (
      [...allCheckboxOfSelectedYear].find(
        (checkbox) => checkbox.checked == true
      )
    ) {
      btn_change_all.classList.remove("d-none");
    } else {
      change_box.classList.remove("d-block");
      btn_change_all.classList.add("d-none");
      btn_change_all.classList.remove("active");
      tables_selected = [];
      check_selected_in_year = false;
    }
  }
};

function UpdateOptionsSections() {
  const n_sections = document.querySelector(`.nSectionsByYear`).textContent;
  const optionsFragment = document.createDocumentFragment();
  for (let i = 0; i < n_sections; i++) {
    const optionElement = document.createElement("option");
    optionElement.textContent = `${abc[i]}`;
    optionsFragment.append(optionElement);
  }
  select.replaceChildren(optionsFragment);
}

//  shortcuts
document.addEventListener("keydown", (e) => {
  // to go back
  if (e.key.toLowerCase() === "z" && e.ctrlKey) {
    if (now_history > 0) {
      e.preventDefault();
      now_history--;
      moveHistory();
    }
  }
  // to go next
  if (e.key.toLowerCase() === "y" && e.ctrlKey) {
    e.preventDefault();
    if (now_history < history.length - 1) {
      now_history++;
      moveHistory();
    }
  }
});
