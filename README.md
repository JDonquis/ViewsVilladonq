views_villadonq is for all views to villadonq project

1. Create a file for each module and keep order

for example:

Student
	index.html
	create.html
	update.html

Menus
	menu.html

Workspace
	index.html


2. File includes is for html that we going use in many parts of project

3. We going to use js modules so pay attention to how organize the functions and modules
	
	3.1 each js module represent one module of backend, so the module Student, should have a js module that call all necessary functions
	3.2 the design functions should be create in such way could be callable for a different module if is necessary
	3.3 one document js can have multiple functions only if all functions are required for to do the work, in case of one function be independent of other function should create in another document js




