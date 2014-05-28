// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Patrick Eaton',
			'email'    => 'patrick.eaton.04@gmail.com',
			'password' => Hash::make('password'),
			'image'    => 'brad-profile-square.jpg',
			'about'    => '<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras quis ipsum quis diam venenatis sollicitudin. Mauris vehicula viverra ornare. Mauris massa metus, vehicula sit amet magna quis, tempus faucibus velit. Aliquam et interdum sapien, eu adipiscing est. Ut tempus tempor fringilla. Proin auctor eget eros eget auctor. Integer sit amet nisi volutpat, rutrum ligula eu, laoreet ligula. Curabitur suscipit tellus eget euismod elementum. Praesent convallis molestie enim, a blandit elit malesuada at. Donec in tempor turpis, ac egestas ligula. Praesent commodo dui egestas, faucibus mi in, blandit ante.
</p>
<p>
Maecenas feugiat consectetur adipiscing. Donec ac lacus eget risus convallis ultrices vitae sit amet dolor. Sed vel ipsum imperdiet nunc eleifend faucibus. Etiam et eleifend leo, nec venenatis neque. Etiam lacinia est tristique sem vehicula elementum. Pellentesque molestie nunc ac nulla viverra feugiat. Aenean pharetra mauris ligula, eu consequat nibh porta in. Vestibulum at mauris pellentesque, laoreet justo vel, congue arcu. Vivamus elementum justo libero, nec imperdiet nulla laoreet vitae. Cras dolor magna, consectetur at leo eu, sagittis imperdiet sem. Nullam pulvinar blandit eros, porttitor pretium turpis feugiat ut. Sed venenatis orci non dignissim egestas. Donec vestibulum elit ut risus pharetra, eget varius ipsum ullamcorper. Maecenas tempus sed urna nec interdum. Nam laoreet hendrerit nulla et tristique.
</p>'
		));
	}

}
