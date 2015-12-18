<?php

use Illuminate\Database\Seeder;

class ForumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     	factory('App\Forum')->create([
          	'author' => "Charles Barkley",
        	'title' => "Whats up with Justin's hair",
       	 	'post' => "orem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan, ex id congue volutpat, mauris sapien sollicitudin ligula, in condimentum libero purus vel libero. Etiam ut dui eget diam venenatis gravida cursus et ante. Cras aliquet in est sagittis sodales. Aenean magna ante, pellentesque vel tempus eget, finibus ac ex. Aenean euismod sed felis in condimentum. Mauris mollis, mi ut sodales vulputate, mi purus blandit dolor, eu facilisis augue sapien ac nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque imperdiet, ante semper accumsan bibendum, elit leo convallis nisl, eu eleifend lorem quam sit amet diam. Integer congue purus orci, non convallis lorem pretium et. Nullam pharetra, augue sed ullamcorper pretium, nunc tellus lobortis lectus, quis luctus lorem tortor ac purus. Aenean maximus ex eget arcu placerat dapibus dapibus a diam. Aliquam erat volutpat. Duis facilisis cursus lacus sit amet sollicitudin.
Fusce posuere eros ullamcorper libero convallis vestibulum. Vivamus cursus venenatis placerat. Fusce nulla velit, aliquet sit amet tellus a, dapibus laoreet orci. Maecenas tempor consequat mi, sit amet sodales erat faucibus ac. Maecenas non volutpat massa. Sed gravida velit eget est tincidunt mollis. Fusce venenatis vulputate ante eget mattis.
Nulla hendrerit auctor euismod. Cras feugiat consequat diam id tempus. Fusce viverra suscipit tortor, ac consectetur tortor sagittis sit amet. Proin in pharetra sapien. Praesent pulvinar enim at ex feugiat pharetra. Proin euismod, eros eget faucibus pretium, justo tellus suscipit odio, vel dapibus neque ante vel eros. Morbi aliquet libero turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vel lobortis justo, eget porttitor neque.",
        	'slug' => "whats-up-with-justins-hair",
        ]);

        factory('App\Forum')->create([
          	'author' => "Kunle Ajayi",
        	'title' => "I'm Sick of bieber",
       	 	'post' => "orem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan, ex id congue volutpat, mauris sapien sollicitudin ligula, in condimentum libero purus vel libero. Etiam ut dui eget diam venenatis gravida cursus et ante. Cras aliquet in est sagittis sodales. Aenean magna ante, pellentesque vel tempus eget, finibus ac ex. Aenean euismod sed felis in condimentum. Mauris mollis, mi ut sodales vulputate, mi purus blandit dolor, eu facilisis augue sapien ac nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque imperdiet, ante semper accumsan bibendum, elit leo convallis nisl, eu eleifend lorem quam sit amet diam. Integer congue purus orci, non convallis lorem pretium et. Nullam pharetra, augue sed ullamcorper pretium, nunc tellus lobortis lectus, quis luctus lorem tortor ac purus. Aenean maximus ex eget arcu placerat dapibus dapibus a diam. Aliquam erat volutpat. Duis facilisis cursus lacus sit amet sollicitudin.
Fusce posuere eros ullamcorper libero convallis vestibulum. Vivamus cursus venenatis placerat. Fusce nulla velit, aliquet sit amet tellus a, dapibus laoreet orci. Maecenas tempor consequat mi, sit amet sodales erat faucibus ac. Maecenas non volutpat massa. Sed gravida velit eget est tincidunt mollis. Fusce venenatis vulputate ante eget mattis.
Nulla hendrerit auctor euismod. Cras feugiat consequat diam id tempus. Fusce viverra suscipit tortor, ac consectetur tortor sagittis sit amet. Proin in pharetra sapien. Praesent pulvinar enim at ex feugiat pharetra. Proin euismod, eros eget faucibus pretium, justo tellus suscipit odio, vel dapibus neque ante vel eros. Morbi aliquet libero turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vel lobortis justo, eget porttitor neque.",
        	'slug' => "im-sick-of-bieber",
        ]);

        factory('App\Forum')->create([
          	'author' => "Frank Oshodi",
        	'title' => "I love bieber",
       	 	'post' => "orem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan, ex id congue volutpat, mauris sapien sollicitudin ligula, in condimentum libero purus vel libero. Etiam ut dui eget diam venenatis gravida cursus et ante. Cras aliquet in est sagittis sodales. Aenean magna ante, pellentesque vel tempus eget, finibus ac ex. Aenean euismod sed felis in condimentum. Mauris mollis, mi ut sodales vulputate, mi purus blandit dolor, eu facilisis augue sapien ac nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque imperdiet, ante semper accumsan bibendum, elit leo convallis nisl, eu eleifend lorem quam sit amet diam. Integer congue purus orci, non convallis lorem pretium et. Nullam pharetra, augue sed ullamcorper pretium, nunc tellus lobortis lectus, quis luctus lorem tortor ac purus. Aenean maximus ex eget arcu placerat dapibus dapibus a diam. Aliquam erat volutpat. Duis facilisis cursus lacus sit amet sollicitudin.
Fusce posuere eros ullamcorper libero convallis vestibulum. Vivamus cursus venenatis placerat. Fusce nulla velit, aliquet sit amet tellus a, dapibus laoreet orci. Maecenas tempor consequat mi, sit amet sodales erat faucibus ac. Maecenas non volutpat massa. Sed gravida velit eget est tincidunt mollis. Fusce venenatis vulputate ante eget mattis.
Nulla hendrerit auctor euismod. Cras feugiat consequat diam id tempus. Fusce viverra suscipit tortor, ac consectetur tortor sagittis sit amet. Proin in pharetra sapien. Praesent pulvinar enim at ex feugiat pharetra. Proin euismod, eros eget faucibus pretium, justo tellus suscipit odio, vel dapibus neque ante vel eros. Morbi aliquet libero turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec vel lobortis justo, eget porttitor neque.",
        	'slug' => "i-love-bieber",
        ]);
    }
}
