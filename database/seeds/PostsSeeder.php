<?php

use Illuminate\Database\Seeder;
use App\Post;
	
class PostsSeeder extends Seeder {

    public function run()
    {
        $posts = [
			['text' => 'Note that we did not tell Eloquent which collection to use for the User model. Just like the original Eloquent, the lower-case, plural name of the class will be used as the collection name unless another name is explicitly specified. You may specify a custom collection (alias for table) by defining a collection property on your model:', 'user_id' => 1],
            ['text' => 'Eloquent will also assume that each collection has a primary key column named id. You may define a primaryKey property to override this convention. Likewise, you may define a connection property to override the name of the database connection that should be used when utilizing the model.', 'user_id' => 1],
            ['text' => 'The database driver plugs right into the original query builder. When using mongodb connections, you will be able to build fluent queries to perform database operations. For your convenience, there is a collection alias for table as well as some additional mongodb specific operators/operations.', 'user_id' => 1],
    	];

        DB::connection('mongodb')->collection('posts')->delete();
        
        foreach ($posts as $post){
        	Post::create($post);
    	}
    }
}