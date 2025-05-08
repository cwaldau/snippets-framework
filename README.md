*** Framework specific instructions ***
* Edit `src/auth.php` to customize username/password or comment out the include of `auth.php` if you dont want to password protect
* Organize documentation and code snippets into sections
* Each section can have its own `filename.md` file
* Place the markdown files in the `src/snippets` folder
* Navigate to the site to see a list of all available snippets
* Click on any of the snippets to view the contents
* Thats all!

*** Advanced Framework instructions ***
If you want to have versioning, history, rollbacks/backups, collaboration etc it is best for the `src/snippets` folder to be its own, separate git repo. Using this method you dont need to sift through framework files to find your documentation. It also allows for cleaner commit history, without framework improvements cluttering it up.

* Create a repo for the Framework
  * This will hold the framework itself
  * Repo can be named however you want except for `snippets`
* Create a `snippets` repo
  * This will hold _only_ the markdown files
  * Should not be divided up into subfolders (subfolders are not accounted for in the code)
* Delete `src/snippets` folder from the Framework repo
* In terminal, move to the `src` folder (ex: `cd src`) of the Framework repo
* Clone the snippets repo inside of `src`
* Now the `src/snippets` folder is back but acts as its own git repo
  * Important: modifying files in the snippets repo (`src/snippets`) from the documentation framework repo will not list changes in VSCode git sidebar
  * Open the snippets repo as its own project in VSCode for ease of use
* Add `src/snippets` to gitignore to stop the snippets folder from trying to be committed

NOTE: If you prefer to call the snippets repo something else:
* Search the documentation framework code for all references to the snippets folder (`src/snippets`)
* Replace with desired/chosen repo name
* This is untested and could have unforeseen consequences! Proceed at your own risk!
