<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/cssforapp.css">
        <script type='text/javascript' src="<?php echo base_url(); ?>js/javascriptforapp.js"></script>
    </head>
    <body>

        <div style="boarder: 2px solid black;">
            <form action="<?php echo base_url(); ?>/index.php/Savedatacontroller/savedata" id="myForm" > 
                <div id="head">
                    <input type="text" name="working_on" id="a" placeholder="type what are you doing"/>
                    <select  name="category" onchange="getval(this);">
                        <option value="select">select category</option>


                        <option value="Personal" >Personal</option>
                        <option value="Work">Work</option>
                        <option value="Meeting">Meeting</option>
                        <option value="Refreshment">Refreshment</option>


                    </select>


                    <input type="hidden" id="time" name="time_elapsed" value="00">

                </div>
            </form>
            </br>

            <div class="container" id="ta1" style="visibility: hidden">
                <div>  
                    <table style="margin-left:-250px">
                        <th>  
                            <button id= "startPause" onclick="startPause()"><b id="start">Start</b></button></th>
                        <th><h1><p id="output">0:00:00:00</p></h1></th>


                        <th><button onclick="get_total_time()" id="reset"><b id="reset">Stop</b</button></th>

                    </table>
                </div>
            </div>
            

