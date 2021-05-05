#Student Profile
###Group D CSCC 22
*Maya Asuero, Rogelio Ibacarra, Paolo Paredes*


<hr />
**Prerequisites:**
- `composer require laravel/ui`


<hr />
**Required tables:**
1. `students` table
```
        CREATE TABLE `students`
            `id_number` varchar(45) NOT NULL,
            `firstname` varchar(45) NOT NULL,
            `lastname` varchar(45) NOT NULL,
            `birthdate` date NOT NULL,
            `address` varchar(45) NOT NULL,
            `year_level` varchar(45) NOT NULL,
            `course` varchar(45) NOT NULL,
            `middlename` varchar(45) DEFAULT NULL,
            PRIMARY KEY (`id_number`)
        )
```
<br>
2. migrate `users` table
> `php artisan migrate`

