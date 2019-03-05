<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


## Learning Laravel Key Points

* npm run dev     **loock all our assets and compile it*
* npm run watch   **live compile*
* php artisan make:controller PostsController **creating controller*
* php artisan make:model Post -m  **creating the Model [-m for migration]*

* php artisan tinker **tinker [tool used to insert data]*
* php artisan make:controller PostsController --resource  **to creating a controller with all resources*

* php artisan route:list **used to view the the all the routes present in the project*
* use App\Post  **using|importing model in controller*
* Post::all();  *fetchs all of the data in this -> model ->Post table->with('name',$name) [to pass the variable to the view]*

##### Arrange the posts 

* Post::orderBy('date','asc/desc')->get();  *to arrenge the posts in ascendng/des order* 

##### Get the limited posts 

* Post::orderBy('date','asc/desc')-take(1)->get();  *to limit the posts[using take(no,of posts)]*

##### Pagination [showin next pages]

* $posts = Posts::orderBy('craeted_at','desc')->paginate(10);

* paginate(10)=> *will display the 10 posta in a page once we get 11 post it make next page for a upcoming posts*

