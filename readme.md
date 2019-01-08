Model based database structure for PHP projects

How to use:

1. Create a file in /migrations which will have your mysql - create table statement. eg: migrations/create_user_table.php
2. Create a model in /models corresponding to the migration file. Make sure $fillable has all the columns excluding 'id'. eg: models/users.php
3. Inorder to get data, follow sub-steps
	a. Include the model whose data you want
	b. Instantiate the model
	c. To store onto the databse, first store in values in an array
	d. Pass the array in the save() method
	c. Use any of the methods mentioned below

Methods in the BaseDatabaseModel

include User.php;
$user = new User();

1. find($id) : $user_details = $user->find($id);

2. findAll() : $users = $user->findAll();

3. where($key, $value) : $first_user = $user->where('id', 1);

4. save($data) : 
	$user_details = ['John', 'Doe', 'johndoe@test.dev', '1234567890', '127.0.0.1', 'asd2v21238a', '8/1/2019'];
	$user->save($user_details);

5. update($id, $value) :
	$user->update('mobile', '1223334444');
