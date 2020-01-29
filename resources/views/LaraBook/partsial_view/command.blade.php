          <h2 class="text-center" id="command">Command</h2>
          <div class="row">
            <div class="col-md-2">
              @include('LaraBook.partsial.index_dropdown')
            </div>
          </div><br>
          <table class="table table-hover" style="font-size:17px">
              <tbody>
                <tr>
                  <td class="table-secondary" style="width: 10%;"><span style="font-size: 18px;color:#008080"><strong>Topic</strong></span></td>
                  <td class="table-secondary" style="width: 50%;">
                    <span style="font-size: 18px;color:#008080"><strong>Command</strong></span>
                  </td>
                  <td class="table-secondary" style="width: 40%;">
                    <span style="font-size: 18px;color:#008080"><strong>Usage & Explanation </strong></span>
                  </td>
                </tr>

                <tr>
                  <td class="table-dark" style="color: white;">php artisan </td>
                  <td>
                    php artisan <br><br>
                    php artisan sever<br><br><br><br><br>
                    php artisan config:clear <br><br><br>
                    php artisan config:cache</td>

                  <td>
                    to get the list of all possible commands available, <br><br>

                    Serve the application on the PHP development server (The purpose of using Php artisan serve (PHP builtin server) is just for testing and easy starting your project it should not be used in real website deployment)<br><br>

                    To clear out config settings and cache (Deleting the resultant cache file, usually located at bootstrap/cache/config.php,)<br><br>to re-cache the updated settings.(The config:cache command can be used to create a cache file for the applications configuration files. This cache file will improve the performance when loading the configuration values. This command will first clear any existing configuration cache before regenerated the new cache.)</td>
                </tr>

                <tr>
                  <td class="table-dark" style="color: white;"></td>
                  <td>
                    
                    php artisan down <br><br>
                    php artisan up <br><br>
                    php artisan serve --port=8001 

                  </td>
                  <td>
                    
                    503 : service unavailable mode <br><br>
                    live from maintanance mode <br><br>
                    to change the port to run the project<br><br>

                  </td>
                </tr>

                <tr>
                  <td class="table-dark" style="color: white;">COMPOSER</td>
                  <td>
                  composer <br><br>
                  composer update/install <br><br>
                  composer dump-autoload</td>
                  <td>
                  see composer version && install or not <br><br>
                  scan and fix as per require (any update version need or remove previos version)<br><br>
                  Basically, because Composer can't see the migration files you are creating, you are having to run the dump-autoload command which won't download anything new, but looks for all of the classes it needs to include again. It just regenerates the list of all classes that need to be included in the project (autoload_classmap.php), and this is why your migration is working after you run that command</td>
                </tr>


                <tr>
                  <td class="table-dark" style="color: white;">Route</td>
                  <td>php artisan route:list</td>
                  <td>to see the list of route registerd</td>
                </tr>

                <tr>
                  <td class="table-dark" style="color: white;">Middleware</td>
                  <td>php artisan make:middleware CheckAge</td>
                  <td> To create a filter. // (Bridge for route) </td>
                </tr>
                

                {{-- migration --}}
                {{-- migration --}}
                {{-- migration --}}
                <tr>
                  <td class="table-dark" style="color: white;" rowspan="12">
                    Migration <br><br><span class="text-danger">composer dump-autoload</span>(first drop all table ,may solve problem in any kind of operation on migration )
                  </td>

                  <td>
                    php artisan make:migration create_users_table (--create=users) <br><br>
                   
                  </td>

                  <td>
                   create migration in the default directory (/database/migrations) <br><br>
                   migration file name is create_users_table <br>
                   table name is users (file name & table name may different) 
                 </td>
                </tr>

                <tr>
                  <td>
                    php artisan make:migration create_users_table --path=dbase/migrations/test <br><br>
                   
                  </td>

                  <td>
                    migrate to DB specified path <br><br>
                   create migration file specific path(reset/refresh also same) <br><br>
                   for optimize roolback option for using path
                 </td>
                </tr>

                <tr>
                  <td>
                    php artisan make:migration rename_test_to_demo
                   
                  </td>

                  <td>
                      First create a different migration file with appropriote name that will rename  existing table <br><br>
                      <b>if up() Schema::rename('tests','demo'); <br>then down() will be Schema::rename('demo','tests');</b>if drop / rolling back then return to previous name.
                  </td>
                </tr>

                <tr>
                  <td>
                    php artisan make:migration add_status_to_users --table=users
                   
                  </td>

                  <td>
                      <b>rollback and add extra column but if the project on live then it must do add column by different migration file .</b><br>
                      First create a different migration file with appropriote name that will add new columns in existing table <br><br>
                      <b>Must do  $table->dropColumn('col_name') / (['col_name','col_name']);</b> on schema down function for which columns are added.
                   
                  </td>
                </tr>


                <tr>
                  <td>
                    php artisan migrate <br><br>

                  </td>

                  <td>
                    calling the up() to migrate in DB.
                 </td>
                </tr>

                <tr>
                  <td>
                    php artisan migrate --froce <b>(sure from sir)</b>

                  </td>

                  <td>
                    The --force flag prevent you from accidentally running your migrations on a production environment. Like when you have 2 ssh terminals open or something.
                 </td>
                </tr>

                <tr>
                  <td>
                    php artisan migrate:rollback
                  </td>

                  <td>
                    This command rolls back( callind down()) the last "batch" of migrations, which may include multiple migration files <br><br><b>You can modify bacth number in your DB to rollback the migration you want</b> <br><br>
                    Rolling Back Migrations from the default directory (/database/migrations) <br><span class="text-danger">for specific rollback copy the file need to be rolback then execute rollback on that path (reset/refresh also same)</span>
                 </td>
                </tr>

                <tr>
                  <td>
                    php artisan migrate:rollback --step=5                   
                  </td>

                  <td>
                    rollback a limited number of migrations
                 </td>
                </tr>

                <tr>
                  <td>
                    php artisan migrate:reset                 
                  </td>

                  <td>
                    command will roll back all of your application's migrations
                 </td>
                </tr>

                <tr>
                  <td>
                    php artisan migrate:refresh <br><br>
                    php artisan migrate:refresh --seed  <br>(// Refresh the database and run all database seeds...)               
                  </td>

                  <td>
                    calling down() then call up() function. <br><br>
                    Rollback & Migrate In Single Command.
                    command will roll back all of your migrations and then execute the  migrate command. This command effectively re-creates your entire database.
                 </td>
                </tr>

                <tr>
                  <td>
                    php artisan migrate:refresh --step=5                 
                  </td>

                  <td>
                    For example, the following command will rollback & re-migrate the last five migrations:
                 </td>
                </tr>

                <tr >
                  <td>
                    php artisan migrate:fresh <b>(use after sure from sir)</b><br><br>
                    php artisan migrate:fresh --seed
                  </td>
                  
                  <td>
                    command will drop all tables from the database and then execute the  migrate command <br><br>
                    <span class="text-success">Drop All Tables & Migrate <br><br>vs  The difference between “refresh” and “fresh” is that the new fresh command skips all the down methods or the rollback by dropping the tables, then running through the up methods. ( sir)</span>
                  </td>
                </tr>

                <tr>
                  <td class="table-dark" style="color: white;">Controller</td>
                  <td>php artisan make:controller -r Admin/UsersController <br><br>
                  php artisan make:controller ShowProfile --invokable <br><br> 
                  php artisan make:controller PhotoController --resource(r) --model=Photo <br><br>php artisan make:controller API/PhotoController api
                  </td>
                  <td>?? <br><br>invokeable // ?? <br><br>with or without model <br><br>--API resorce controller</td>
                </tr>

                <tr>
                  <td class="table-dark" style="color: white;">Request</td>
                  <td>php artisan make:request StoreBlogPost  <br><br><br>
                    php artisan make:rule Uppercase 
                  </td>
                  <td>To generate a new rule object. //  Write external validation rules. <br><br>To generate a new rule object // To generate a rule that verifies a string is uppercase</td>
                </tr>

                <tr>
                  <td class="table-dark" style="color:white"></td>
                  <td class="table-dark" style="color:white"></td>
                  <td class="table-dark" style="color:white"></td>
                </tr>
              </tbody>
          </table>