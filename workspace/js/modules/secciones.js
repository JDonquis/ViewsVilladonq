const abc = ['A','B','C','D','E','F','G','H','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z']
const allTables = document.querySelectorAll('table')
const all_btn_change_solo = document.querySelectorAll('.btn_change_solo')

function newTable(year, section) {

return `
<div class="P-4">
                                    <div class="mx-auto">
                                        <h4 class="h4">Sección ${year}${section}</h4>
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
	} else {
		console.log('culo')
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

		el.dataset.nsections++
		}

	// event: click on icon change section
		if (el.classList.contains('btn_change_solo')) {
			change_box.classList.add('d-block')
			console.log(window.pageYOffset + el.getBoundingClientRect().top)
			change_box.classList.remove('position-fixed')

			change_box.style.top = `${window.pageYOffset + el.getBoundingClientRect().top  - 110}px`
			// change_box = change_box;
				// console.log(el.getBoundingClientRect().top)
			// const selected_table = el.closest('table')
			const actual_table = el.closest('table')
			const actual_year = actual_table.dataset.year

			all_btn_change_solo.forEach(i => i.classList.remove('color-4'))
			el.classList.add('color-4')
			btn_change_all.classList.remove('active')


			UpdateOptionsSections(actual_year)

			selected_for_change_one = {table: $(`#${actual_table.id}`), tr: el.closest('tr')}

			// const isThere = tables_selected.findIndex(obj => obj.table == selected_table)
			// if (isThere != -1) {
			// 	tables_selected[isThere].students.push(el.closest('tr'))
			// } else {
			// 	tables_selected.push({table: selected_table, students: [el.closest('tr')]})
			// }

			// console.log(tables_selected)
		}

	// event: click on a acpet change
	if(el.classList.contains('btn_change_acept')) {
		const origin_table = selected_for_change_one.table.DataTable()
		const select = el.closest('.change_box').querySelector('select')
		let new_data = origin_table.row(selected_for_change_one.tr).data()
	 	const destiny_table = $(`#table-${select.value}`).DataTable()
	 	// console.log(new_data)
		destiny_table.row.add(new_data).draw().columns.adjust().responsive.recalc()

		selected_for_change_one.table.append(change_box)
		change_box.classList.remove('d-block')
    	// selected_for_change_one.table.a(status_change_box)
	 	origin_table.row(selected_for_change_one.tr).remove().draw()
		selected_for_change_one = {}
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

	

}

const btn_change_all = document.querySelector('.btn_change_all')
let check_selected_in_year = false


document.onchange = (e) => {
	const el = e.target

	if (el.type = 'checkbox'){

		const selected_table = el.closest('table')
		const year_selected = selected_table.dataset.year
		if (check_selected_in_year === false) check_selected_in_year = year_selected
		const allTablesOfSelectedYear = document.querySelectorAll(`table[data-year="${year_selected}"] input[type=checkbox]`)

		if (check_selected_in_year === year_selected) {

			if ([...allTablesOfSelectedYear].find(checkbox => checkbox.checked == true)) {
				btn_change_all.classList.remove('d-none')
			} else {
				btn_change_all.classList.add('d-none')
				check_selected_in_year = false

			}
		} else { el.checked = false }
		

		const isThere = tables_selected.findIndex(obj => obj.table == selected_table)
			if (isThere != -1) {
				tables_selected[isThere].students.push(el.closest('tr'))
			} else {
				tables_selected.push({table: selected_table, students: [el.closest('tr')]})
			}
		}


}



// document.onchange = (e) => {
// 	const el = e.target

// 	 if (el.dataset.use = "select_new_section") {
// 	 	const origin_table = $(`#table-1A`).DataTable()

// 	 	console.log(selected_for_change_one)
// 	 	let new_data = origin_table.row(selected_for_change_one).data()
// 	 	const destiny_table = $(`#table-${el.value}`).DataTable()
// 	 	console.log(new_data)
// 		destiny_table.row.add(new_data).draw()
// 	 	origin_table.row(selected_for_change_one).remove().draw()
// 		selected_for_change_one = ''
// 	 }
// }

// allTables.forEach(t => {
// 	const change_box = document.querySelector(`#change_box_${t.id}`)
// 	const year = t.dataset.year
// 	console.log(year)
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