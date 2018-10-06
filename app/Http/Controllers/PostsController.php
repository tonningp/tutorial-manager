<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index() {
        $posts = [
            [
                'title' => 'Basic HTML Page',
                'id'    => 1,
                'type' => 'html',
                'body' => "
<!DOCTYPE html>
<html>
<!-- The Heading -->
    <head>
        <title>Page Title</title>
    </head>
    <body>
        <h1>This is a Heading</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Morbi id quam vel neque cursus vulputate. Praesent venenatis
            nibh a diam suscipit, at fermentum ligula dapibus. Donec dictum cursus sapien vitae sodales. Fusce dui libero, venenatis sit amet ultrices eget, tempus eget lacus. Integer vitae dolor pellentesque, feugiat purus a, vulputate justo. Nulla facilisi. Integer ut odio ut justo posuere dictum ac ut turpis. Duis a neque libero. Aenean volutpat molestie leo, a auctor sem eleifend et.</p>
        <p>Sed eleifend sem in neque dignissim consectetur. Integer sollicitudin quis diam eu efficitur. Mauris fermentum ornare tellus, ut ultrices nulla aliquam et. Duis vestibulum, nisi nec consectetur eleifend, purus justo maximus tellus, ut lobortis sem orci quis urna. Phasellus felis dui, aliquam et est nec, porttitor rutrum sem. Vivamus egestas et dui non pulvinar. Vestibulum tortor nisi, pellentesque vestibulum nibh eget, aliquet vehicula erat. Maecenas quis leo et lectus cursus aliquet. Phasellus pharetra tempor augue id condimentum. Vestibulum sed risus elementum sem varius mattis.</p>
        <p>Duis pretium mauris non sem tempor tincidunt et sed odio. In rutrum turpis vel nisi pharetra, semper pulvinar velit ultrices. Maecenas in elit nunc. In euismod libero in risus rutrum sollicitudin. Nulla venenatis sodales odio iaculis tempor. Mauris suscipit augue felis, congue faucibus leo aliquam at. Nulla semper nisl vitae tellus pellentesque luctus. Integer at tristique neque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam elit nisl, mattis sed sem non, rhoncus vulputate orci. Etiam eget aliquam enim, ac ultrices diam. Ut porttitor orci et pulvinar congue. Duis condimentum purus in ligula porttitor, id efficitur augue vulputate.</p>
        <p>Quisque tincidunt commodo urna, eget mattis est tincidunt vestibulum. Nunc hendrerit eget erat sed venenatis. Sed in facilisis justo, ut varius nulla. Vivamus rhoncus ante nec euismod iaculis. Proin vel ornare ligula, a eleifend mauris. Proin eu congue enim. Duis vel laoreet ante, at interdum sapien. Aenean eu mauris eu mauris tristique rutrum gravida vitae diam. Donec suscipit felis elit, a semper sem varius vel. Nulla a mi libero. Nulla vel blandit diam, sit amet sodales ligula.</p>
    </body>
</html>",

            ],
            [
                'title' => 'C++',
                'id'    => 2,
                'type' => 'c++',
                'body' => 
'
#include<iostream>
//Single Comment
/*
This is a multiline comment
*/
using namespace std;

int main()
{
    cout << "Hello World" << endl;

    return 0;
}
'
            ],
            [
                'title' => 'Python',
                'id'    => 3,
                'type' => 'python',
                'body' => 
'
def hello(s):
    print(s)

hello("Hello World")
'
            ],
        ];
        return view('posts.index',[
            'posts' => $posts,
            'theme' => env('THEME'),
        ]);
    }

    public function learnHTML() {
        return 'learn-html';
    }

    public function learnCSS() {
        return 'learn-css';
    }

    public function learnColors() {
        return 'learn-colors';
    }
}
