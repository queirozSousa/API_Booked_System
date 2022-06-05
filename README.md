# API_Booked_System
 The API of The Booked System, using the power of Laravel in the Back-end.
 
 Installation
 
Clone the repository
 https://github.com/queirozSousa/API_Booked_System.git
 
Switch to the repo folder

    cd API_Booked_System
 
Install all the dependencies using composer

    composer install
    
Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env
    
Generate a new application key

    php artisan key:generate
    
Run the database migrations (Set the database connection in .env before migrating)

    php artisan migrate
    
Start the local development server

    php artisan serve
    
You can now access the server at http://localhost:8000



 
 
 
