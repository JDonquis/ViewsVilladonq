const abc = ['A','B','C','D','E','F','G','H','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z']
const allTables = document.querySelectorAll('table')
const all_btn_change_solo = document.querySelectorAll('.btn_change_solo')
const total_rooms = document.querySelector('#total_rooms')
const total_sections = document.querySelector('#total_sections')
const free_classrooms = document.querySelector('#free_classrooms')
const add_btns = document.querySelectorAll('.add_btn')
const all_years = document.querySelectorAll('.each_year')

function disableOrNotAddBtnSections() {
	if (total_sections.textContent >= total_rooms.value) {
			for (const btn of add_btns) btn.classList.remove('d-block')
		}
	else {
		for (const btn of add_btns) btn.classList.add('d-block')
	}
}
disableOrNotAddBtnSections() 


function addDeleteIcon(year) {

		const n_sections = add_btns[year].dataset.nsections
		const actual_delete_icon = document.querySelector(`.each_year[data-year="${year}"] .delete_icon`)
		if (actual_delete_icon) {
			actual_delete_icon.remove()
		}
		if (n_sections > 1) {
			const delete_icon = document.createElement('i')
			delete_icon.classList.add(' ml-2', 'delete_icon', 'fas', 'fa-trash-can')
			delete_icon.dataset.year = i
			delete_icon.dataset.table = `table-${i}${abc[n_sections]}`
			document.querySelectorAll('.each_section h4')[n_sections].append(delete_icon)
		}



		// delete_icons.forEach(delete_icon => {
		// 	delete_icon.classList.add('d-none')
		// })
		// delete_icons[delete_icons.length-1].classList.remove('d-none')
	
}
	
all_years.forEach((each_year, i) => {
	addDeleteIcon(i)
})

function newTable(year, section) {


return `
 				<article class="each_section" data-table="table-${year}${section}">
							<div class="position-absolute Pl-4 pb-0">
                                    <div class="mx-auto">
                                        <h4 class="h4">Sección ${year}${section}
                                         <i data-table="table-${year}${section}" data-year="${year}" title="Eliminar Sección" class=" ml-2 delete_icon fas fa-trash-can" ></i>
                                        </h4>
                                        <p>matricula: 0</p>
                                    </div>
                                 </div>
                                <div class="card-body table-responsive" >
                                    
                                    <table id="table-${year}${section}" data-year="${year}" class="table display position-relative table-head-fixed text-nowrap table-striped table-bordered">
                                        
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
                                </article>
`
}


let selected_for_change_one = {}
let tables_selected = []
const data = [
	{}
]

const change_box = document.querySelector(`.change_box`)
const select = change_box.querySelector(`select`)

let status_change_box = 0

document.querySelector('body').onclick = (e) =>{
	const el = e.target	

	if ( !el.classList.contains('btn_change_solo') && el.closest('.tooltip_child') != change_box && !btn_change_all.classList.contains('active') ) {
		change_box.classList.remove('d-block')
		status_change_box = 0
		selected_for_change_one.tr?.querySelector('i').classList.remove('color-4')
	} 

	// event: click on crear una nueva sección ************************************+
	if (el.classList.contains('add_btn')) {
		const div = document.createElement('div')
		const section = abc[el.dataset.nsections]
		const year = el.dataset.year

		div.innerHTML = newTable(year, section)
		el.closest('.collapse').append(div)

		$(`#table-${year}${section}`).DataTable( {
        	"responsive": true,
        	"lengthChange": false,
        	"autoWidth": false,
        	'paging': false,
        	"ordering": true,
        	'columnDefs': [ {
        	'orderable': false, // set orderable false for selected columns
        	'targets': [0,1], // column index (start from 0)
        	'content': "",
     					}]
    		})

		let nSections = ++el.dataset.nsections
		document.querySelector(`.nSections[data-year="${year}"]`).textContent = nSections
		UpdateOptionsSections(year)
		++total_sections.textContent
		--free_classrooms.textContent

		disableOrNotAddBtnSections() 
		addDeleteIcon(year-1)

	}

	// event: click on icon change section
		if (el.classList.contains('btn_change_solo')) {
			change_box.classList.add('d-block')
			change_box.classList.remove('position-fixed')

			change_box.style.top = `${window.pageYOffset + el.getBoundingClientRect().top  - 110}px`
			// change_box = change_box;
			// const selected_table = el.closest('table')
			const actual_table = el.closest('table')
			const actual_year = actual_table.dataset.year

			all_btn_change_solo.forEach(i => i.classList.remove('color-4'))
			el.classList.add('color-4')
			btn_change_all.classList.remove('active')


			UpdateOptionsSections(actual_year)

			selected_for_change_one = {table_id: actual_table.id, tr: el.closest('tr')}

			// const isThere = tables_selected.findIndex(obj => obj.table == selected_table)
			// if (isThere != -1) {
			// 	tables_selected[isThere].students.push(el.closest('tr'))
			// } else {
			// 	tables_selected.push({table: selected_table, students: [el.closest('tr')]})
			// }

		}

	// event: click on a acpet change
	if(el.classList.contains('btn_change_acept')) {
		

		if (btn_change_all.classList.contains('active')) {

			console.log('click')

			tables_selected.forEach( obj => {
				let origin = $(`#${obj.table_id}`).DataTable()
				let new_data = origin.rows(obj.students).data()
				let destiny_table = $(`#table-${select.value}`).DataTable()
				destiny_table.rows.add(new_data).draw().columns.adjust().responsive.recalc()
	 			origin.rows(obj.students).remove().draw()


	 			change_box.classList.remove('d-block')
				btn_change_all.classList.add('d-none')
				btn_change_all.classList.remove('active')
				tables_selected = []
				check_selected_in_year = false
			})
		} else {
			const origin_table = $(`#${selected_for_change_one.table_id}`).DataTable()
			let new_data = origin_table.row(selected_for_change_one.tr).data()
	 		let destiny_table = $(`#table-${select.value}`).DataTable()
			destiny_table.row.add(new_data).draw().columns.adjust().responsive.recalc()

			change_box.classList.remove('d-block')
    	// selected_for_change_one.table.a(status_change_box)
	 		origin_table.row(selected_for_change_one.tr).remove().draw()
			selected_for_change_one = {}
		}
	}


	if (el.classList.contains('btn_change_all')) {
		change_box.style.top = `${el.getBoundingClientRect().top - 110}px`
		change_box.classList.add('position-fixed')
		btn_change_all.classList.toggle('active')

		if (btn_change_all.classList.contains('active')) {
			change_box.classList.add('d-block')
		} else {
			change_box.classList.remove('d-block')

		}
		UpdateOptionsSections(check_selected_in_year)

	}

	// delete a section **********************************++
	if (el.classList.contains('delete_icon')) {
		document.querySelector(`article[data-table="${el.dataset.table}"]`).remove()
		--total_sections.textContent
		++free_classrooms.textContent

		--document.querySelector(`.add_btn[data-year="${el.dataset.year}"]`).dataset.nsections
		disableOrNotAddBtnSections()
		addDeleteIcon(el.dataset.year - 1)

	}

}
// </ ---------- finish click on body


const btn_change_all = document.querySelector('.btn_change_all')
let check_selected_in_year = false


document.onchange = (e) => {
	const el = e.target

	if (el.type === 'checkbox'){

		const selected_table = el.closest('table')
		const year_selected = selected_table.dataset.year
		if (check_selected_in_year === false) check_selected_in_year = year_selected
		const allCheckboxOfSelectedYear = document.querySelectorAll(`table[data-year="${year_selected}"] input[type=checkbox]`)
		const tr = el.closest('tr')

		if (check_selected_in_year === year_selected) {
			tr.classList.toggle('active')
			const isThere = tables_selected.findIndex(obj => obj.table_id == selected_table.id)
			if (el.checked === true) {
				if (isThere != -1) {
					tables_selected[isThere].students.push(el.closest('tr'))
				} else {
					tables_selected.push({table_id: selected_table.id, students: [el.closest('tr')]})
				}
			} else {

				const indexDelete = tables_selected[isThere].students.indexOf(tr)
				if (indexDelete != -1)  tables_selected[isThere].students.splice(indexDelete,1)
				
			}
			
			if ([...allCheckboxOfSelectedYear].find(checkbox => checkbox.checked == true)) {
					btn_change_all.classList.remove('d-none')
				} else {
					change_box.classList.remove('d-block')
					btn_change_all.classList.add('d-none')
					btn_change_all.classList.remove('active')
					tables_selected = []
					check_selected_in_year = false
				}

		} else { el.checked = false }
		

	}


}



// document.onchange = (e) => {
// 	const el = e.target

// 	 if (el.dataset.use = "select_new_section") {
// 	 	const origin_table = $(`#table-1A`).DataTable()

// 	 	let new_data = origin_table.row(selected_for_change_one).data()
// 	 	const destiny_table = $(`#table-${el.value}`).DataTable()
// 		destiny_table.row.add(new_data).draw()
// 	 	origin_table.row(selected_for_change_one).remove().draw()
// 		selected_for_change_one = ''
// 	 }
// }

// allTables.forEach(t => {
// 	const change_box = document.querySelector(`#change_box_${t.id}`)
// 	const year = t.dataset.year
// 	t.addEventListener('click', (e) => {
// 		if (e.target.classList.contains('btn_change_one')) {
// 			change_box.classList.add('d-block')
// 			e.target.parentNode.append(change_box)
// 			status_change_box = change_box;
// 		}
// 	})
// })

// Cambiar de sección a estudiantes

function UpdateOptionsSections(year) {
	const n_sections = document.querySelector(`.add_btn[data-year="${year}"]`).dataset.nsections
	const optionsFragment = document.createDocumentFragment()
	for(let i = 0; i<n_sections ; i++ ) {	
		const optionElement = document.createElement('option')
		optionElement.textContent = `${year}${abc[i]}`
		optionsFragment.append(optionElement)
	}
	select.replaceChildren(optionsFragment)
}
	
