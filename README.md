<h1>Laravel Blog Project Tutorial from Scratch</h1>
<p>This tutorial is available on youtube. In this tutorial we will build a public blog. Any user can register, login and create a blog post.</p>
<h2>Materials</h2>
<p>This tutorial will cover some of the fundamental concepts of Laravel. After finishing this tutorial, you will be able to build a production ready web app.</p>
<ul>
  <li>Authentication
    <ul>
      <li>Laravel Auth UI Scaffolding</li>
    </ul>
  </li>
  <li>Routing
    <ul>
      <li>Auth Middleware</li>
      <li>POST, PUT, DELETE</li>
      <li>Grouping and naming</li>
    </ul>
  </li>
  <li>Controllers
    <ul>
      <li>Show View</li>
      <li>Request</li>
      <li>Flash message</li>
      <li>File uploading</li>
    </ul>
  </li>
  <li>Form
    <ul>
      <li>CSRF Token</li>
      <li>Input validations</li>
      <li>Show input errors</li>
      <li>Retrieve old input values</li>      
    </ul>
  </li>
  <li>File
    <ul>
      <li>Uploading</li>
      <li>Deleting</li>
    </ul>
  </li>
  <li>Blade Templating
    <ul>
      <li>Components / Anonymous Components</li>
      <li>Conditional</li>
      <li>Common blade directives</li>
      <li>Layout</li>
    </ul>
  </li>
  <li>Bonus
    <ul>
      <li>Bootstrap</li>
      <li>Pagination</li>
      <li>Search Functionality</li>
    </ul>
  </li>
</ul>
<h2>Running this project</h2>
<h3>.env file</h3>
<p>Make sure you have .env file that contains correct informations about your environment. If you don't, just create .env file based on `.env.example` file.</p>
<h3>run migrations</h3>
<p>Run the migrations by using this command. This command will create all the tables and run the seeder.</p>
<pre>
php artisan migrate:fresh --seed
</pre>
<h3>run project</h3>
<p>Finally, run the project by using this command.</p>
<pre>
php artisan serve
</pre>