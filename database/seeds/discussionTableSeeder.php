<?php

use Illuminate\Database\Seeder;
use App\discussion;
class discussionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'Question title 1';

        $discussion1 = [
            'title' => $t1,
            'user_id' => 1,
            'channel_id' => 1,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam ultrices arcu, at placerat velit viverra ut. Sed cursus sit amet elit at tristique. Mauris non sollicitudin sem. Maecenas efficitur sem non magna pulvinar, non ultrices lorem congue. Nulla fermentum arcu nulla, vitae luctus lorem tristique ac. In dictum fermentum volutpat. Aliquam maximus, augue ut tempus accumsan, tortor libero fringilla lacus, a lacinia justo est tempor augue. Cras eget est sapien. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec id efficitur justo. Nullam nec ex sapien. Integer leo odio, varius et vulputate sit amet, pulvinar a justo. Aenean non nisi eu justo congue sollicitudin.',
            'slug' => str_slug($t1)

        ];

        $t2 = 'Question title 2';

        $discussion2 = [
            'title' => $t2,
            'user_id' => 2,
            'channel_id' => 2,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam ultrices arcu, at placerat velit viverra ut. Sed cursus sit amet elit at tristique. Mauris non sollicitudin sem. Maecenas efficitur sem non magna pulvinar, non ultrices lorem congue. Nulla fermentum arcu nulla, vitae luctus lorem tristique ac. In dictum fermentum volutpat. Aliquam maximus, augue ut tempus accumsan, tortor libero fringilla lacus, a lacinia justo est tempor augue. Cras eget est sapien. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec id efficitur justo. Nullam nec ex sapien. Integer leo odio, varius et vulputate sit amet, pulvinar a justo. Aenean non nisi eu justo congue sollicitudin.',
            'slug' => str_slug($t2)

        ];

        $t3 = 'Question title';

        $discussion3 = [
            'title' => $t3,
            'user_id' => 1,
            'channel_id' => 3,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam ultrices arcu, at placerat velit viverra ut. Sed cursus sit amet elit at tristique. Mauris non sollicitudin sem. Maecenas efficitur sem non magna pulvinar, non ultrices lorem congue. Nulla fermentum arcu nulla, vitae luctus lorem tristique ac. In dictum fermentum volutpat. Aliquam maximus, augue ut tempus accumsan, tortor libero fringilla lacus, a lacinia justo est tempor augue. Cras eget est sapien. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec id efficitur justo. Nullam nec ex sapien. Integer leo odio, varius et vulputate sit amet, pulvinar a justo. Aenean non nisi eu justo congue sollicitudin.',
            'slug' => str_slug($t3)

        ];

        $t4 = 'Question 4';

        $discussion4 = [
            'title' => $t4,
            'user_id' => 2,
            'channel_id' => 5,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi aliquam ultrices arcu, at placerat velit viverra ut. Sed cursus sit amet elit at tristique. Mauris non sollicitudin sem. Maecenas efficitur sem non magna pulvinar, non ultrices lorem congue. Nulla fermentum arcu nulla, vitae luctus lorem tristique ac. In dictum fermentum volutpat. Aliquam maximus, augue ut tempus accumsan, tortor libero fringilla lacus, a lacinia justo est tempor augue. Cras eget est sapien. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec id efficitur justo. Nullam nec ex sapien. Integer leo odio, varius et vulputate sit amet, pulvinar a justo. Aenean non nisi eu justo congue sollicitudin.',
            'slug' => str_slug($t4)

        ];

    discussion::create($discussion1);
    discussion::create($discussion2);
    discussion::create($discussion3);
    discussion::create($discussion4);    
}
}
