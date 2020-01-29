<h2 class="text-center" id="framework">Framwork Structure</h2>
          <div class="row">
            <div class="col-md-2">
              @include('LaraBook.partsial.index_dropdown')
            </div>
          </div><br>
          <table class="table table-hover" style="font-size:17px;">
            <tbody>
              <tr>
                <th style="width:25%;"></th>
                <th style="width:25%;"></th>
                <th style="width:25%;"></th>
                <th style="width:25%;"></th>
              </tr>
              <tr>
                <td colspan="2">
                  <img class="ml-0" src="{{ asset('images/larabook/architecture/fw.png') }} " alt="model"  style="width:560px;height: 520px;">
                  <img class="ml-0" src="{{ asset('images/larabook/architecture/fw1.png') }} " alt="model"  style="width:560px;height: 520px;"> 
                  <img class="ml-0" src="{{ asset('images/larabook/architecture/fw2.png') }} " alt="model"  style="width:560px;height: 520px;"> 
                </td>


                <td class="table-info" colspan="2">
                  <img class="ml-0" src="{{ asset('images/larabook/architecture/fw3.png') }} " alt="model"  style="width:560px;height: 520px;">
                  <img class="ml-0" src="{{ asset('images/larabook/architecture/fw4.png') }} " alt="model"  style="width:560px;height: 520px;">
                  <img class="ml-0" src="{{ asset('images/larabook/architecture/fw5.png') }} " alt="model"  style="width:560px;height: 520px;">
                </td>
              </tr>

              <tr>
                <td colspan="2">
                  <img class="ml-0" src="{{ asset('images/larabook/architecture/fw6.png') }} " alt="model"  style="width:560px;height: 520px;">
                  <img class="ml-0" src="{{ asset('images/larabook/architecture/fw8.png') }} " alt="model"  style="width:560px;height: 520px;">
                </td>


                <td class="table-info" colspan="2">
                  <img class="ml-0" src="{{ asset('images/larabook/architecture/fw7.png') }} " alt="model"  style="width:560px;height: 520px;"><br><br>

                   <b>storage</b><br>
                   <span class="text-danger">In Laravel, we call all these storage types as disks</span><br>
                   1.  local storage system <br>
                   2. SFTP to transfer files to other servers (SSH(Secure Shell) File Transfer Protoco)<br>3. the Amazon S3 or Google Cloud storage out of the box. <br><br>
                   temorary fili store >>detail googleing <br><br>
                   <b>Note :</b><br>
                   0. by default root is after 'app/'
                   1. storeAs() >> store with rename in uploadedFile class <br>
                   2. storage::putFileAs >> store with rename in storage <br>
                   <b>both two are use for storage directory</b><br><br><br>


                   <b>vendor</b><br>
                   third party requirement for run the app <br><br>
                   rest do later <br><br>
                   <b>composer.json</b> <br>which pakage is require for the root project <br>
                  <img class="ml-0" src="{{ asset('images/larabook/architecture/composer.png') }} " alt="model"  style="width:300px;height: 150px;"> <br><br>
                  <b>composer.lock</b> <br>information of install pakage 
                </td>

              </tr>

              <tr>
                <td colspan="2">
                    

                    <b>Mutators(seter) and Accessors(geter) </b><br>
                    In Laravel, mutators and accessors allow you to alter data before it's saved to and fetched from a database. To be specific, the mutator allows you to alter data before it's saved to a database. On the other hand, the accessor allows you to alter data after it's fetched from a database. <br>
                    <span class="text-danger">Rules :</span><br>
                    Mutator >> <b>setSubCategorynameAttribute</b> for ['subCategory_name'] .<br>Not use (_) in the function name. <br>
                    <span class="text-danger">Apply :</span><br>
                    Anywhere it is used as frontend , admin, api the <b>attribute</b> always follow the rules.<br>
                    <img class="ml-0" src="{{ asset('images/larabook/architecture/mutator.png') }} " alt="model"  style="width:500px;height: 250px;"> 
                </td>
                <td colspan="2"></td>
              </tr>    

              

              <tr>
                <td class="table-success">
                  31.12.2019 <br>END 
                </td>

                <td class="table-success" style="font-size: 14px">
                  bitfume >><br> Laravel 5.3 Hindi Beginner Tutorials <br><br>
                  Laravel 5.4 File upload (7-9)
                </td>
                <td class="table-success">
                   Coder's Tape(52) >> 41,42 when using factory and seeder
                </td>

                <td class="table-success">
                  Csetuts in hindi >> (done except 10)<a href="https://www.youtube.com/watch?v=jHRkW_tl2Ao&list=PLcuqiGkigdeybkEnWiJNlfZRDSJcDVgRc&index=1" target="_blank">go</a><br>
                </td>
              </tr>

              <tr>
                <td class="table-success">
                </td>

                <td class="table-success">
                </td>

                <td class="table-success">
                </td>

                

                <td class="table-success">
                  Devlob >> Laravel 5.1 for beginners (done except 2,7,8)<a href="https://www.youtube.com/watch?v=Hzm9L3yVCt0&list=PL3ZhWMazGi9IcgWunA4izwTkd9QjSGW2j" target="_blank">go</a>
                </td>
              </tr>

              <tr>
                <td class="table-dark" colspan="2">
                  laravel document <br><br>
                   after basic2 route  
                </td>
                
                <td class="table-dark" colspan="2">
                  laravel basic video <br><br>
                  Coder's Tape(52)  >> (12-19.21-23.25-40-42,44-rest) [40 from here note done]<a href="https://www.youtube.com/watch?v=qiMYkrkXJ6k&list=PLpzy7FIRqpGD0kxI48v8QEVVZd744Phi4&index=1" target="_blank">go</a><br><br>

                  php in hindi(46)  >> (8-10,26-30,33,37) 36 <a href="https://www.youtube.com/watch?v=Oza7QFNTs18&list=PLHFGzOr0F8DKXHU3JWSrrbDzNbyA5ClPj" target="_blank">go</a><br><br>
                  
                  

                  Moniruzzaman  >> 8 <a href="https://www.youtube.com/watch?v=Aau1NT31B2I&list=PL_ftyCsXJUO7wmfTVBYQNY0bMBasVqKTP&index=2" target="_blank">go</a><br><br>

                   Dev(38)  >>(12-13,17,20,22,28)29 [8 from here note done]<a href="https://www.youtube.com/watch?v=JJxcb1WnbcQ&list=PL3ZhWMazGi9IYymniZgqwnYuPFDvaEHJb&index=7" target="_blank">go</a><br><br>

                  Bitfume(38)  >> (8-13)(18src-22)(24-35) <<34 &rest done>><a href="https://www.youtube.com/watch?v=_b0rTMoWVqM&list=PLe30vg_FG4OQz1yZq0z19ZuWD_C3MZbA4&index=8" target="_blank">go</a><br><br>

                  Weblession(61)  >> (7-11)12 <a href="https://www.youtube.com/watch?v=Rsx1xPURdc8&list=PLxl69kCRkiI0rS3u_4hFDA1nyqol4MMZe" target="_blank">go</a><br>   
       
                </td>
              </tr>



              <tr>
                <td class="table-dark" colspan="2">
                  HTML <br><br>
                   w3 school >>
                </td>
                
                <td class="table-dark" colspan="2">
                  
                </td>
              </tr>

              <tr>
                <td class="table-dark" colspan="2">
                  CSS <br><br>
                   w3 school >>
                </td>
                
                <td class="table-dark" colspan="2">
                  
                </td>
              </tr>

              <tr>
                <td class="table-dark" colspan="2">
                  Bootstrap <br><br>
                   w3 school >>
                </td>
                
                <td class="table-dark" colspan="2">
                 
                </td>
              </tr>

              <tr>
                <td class="table-dark" colspan="2">
                  JS <br><br>
                   w3 school >>
                </td>
                
                <td class="table-dark" colspan="2">
                 
                </td>
              </tr>

              <tr>
                <td class="table-dark" colspan="2">
                  jQuery <br><br>
                   w3 school >> jQuery Effects[1], <br>revise pre <br>
                </td>
                
                <td class="table-dark" colspan="2">
                  Kudvenkat(113)  >> 7 <a href="https://www.youtube.com/watch?v=C4QY6F9dyqE&list=PL6n9fhu94yhVDV697uvHpavA3K_eWGQap&index=7" target="_blank">go</a><br><br>

                  yahoo baba(46)  >> 4 <a href="https://www.youtube.com/watch?v=wjFfyqEutYE&list=PL0b6OzIxLPbzSyiC0PFaqeabe1aGhfrbW&index=4" target="_blank">go</a><br><br>

                  thapa(23)  >> 2 <a href="https://www.youtube.com/watch?v=wjFfyqEutYE&list=PL0b6OzIxLPbzSyiC0PFaqeabe1aGhfrbW&index=4" target="_blank">go</a><br><br>
                </td>
              </tr>

              <tr>
                <td class="table-dark" colspan="2">
                  PHP <br><br>
                   w3 school >>
                </td>
                
                <td class="table-dark" colspan="2">
                 
                </td>
              </tr>

              <tr>
                <td class="table-dark" colspan="2">
                  mysql <br><br>
                   w3 school >>
                </td>
                
                <td class="table-dark" colspan="2">
                  
                </td>
              </tr>
              <tr>
                <td class="table-dark" colspan="2">
                      
                </td>
                <td class="table-dark"  colspan="2"></td>
              </tr>
            </tbody>
          </table>