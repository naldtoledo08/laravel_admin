# laravel_admin
Web Application made in Laravel 5.2 framework(PHP) for developers who want to create Web App with role permission features.

Setup
1. Download or clone the repsository
2. Change the database information(.env file in root folder, I recommend to create new database instead of using existing one.
3. Run the migration(artisan migrate), the migration only runs the sql file inside storage/sql/initial.sql
4. poof! It works! You can login using the initial users
    Admin
	user: nald.toledo08@gmail
	pass: password

    Guest
	user: guest@gmail.com
	pass: password


<strong>Note:</strong>
The Application is not yet done and this repository doesn't have full documentation. For now, this serves as my portfolio to someone who want to see my coding in Laravel.

On Development Process(Features to be implemented)
   Edit and Delete of Users, Pages and Roles
   Sidebar, Parent child links
   page like page/1/edit is yet working as Algorithm is needed if you put page url like page/{id}/edit
   
Information that might help understanding of viewer.
   - On public registration, No user can register with an admin type of Role.
   - Parent page don't have url/link. Its purpose is to have set of links like a dropdown navigation tag on it.
   - Page Type: 'Sidebar' is the only working for now. meaning, if you create a page and put sidebar as type, You can see that it will add as a sidebar navigation, Top navigation and both are not yet implemented   
   
   
   