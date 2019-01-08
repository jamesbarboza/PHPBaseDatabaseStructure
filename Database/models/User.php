<?php
    class User extends BaseDatabaseModel{
    
        //  name of the table
        protected $table = 'users';

        //  columns of the table
        protected $fillable = ['first_name', 'last_name', 'email', 'mobile', 'ip', 'password', 'created_at'];
    
        //  functions if required
    }