<?php include "topbit.php"; ?>
        
        <main class="box">
			
			<h2>Home Page</h2>

			<p>Poetry is one of the things that makes us human.  Or is it?  This site features poems designed to be pleasing to the eye, that everyone will enjoy.  You are invited to read the 			poems and then try and work out if they were written by a human or if they were created with a poetry generator. </p>
			
            <script>
                function getVote(int) {
                  var xmlhttp=new XMLHttpRequest();
                  xmlhttp.onreadystatechange=function() {
                    if (this.readyState==4 && this.status==200) {
                      document.getElementById("poll").innerHTML=this.responseText;
                    }
                  }
                  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
                  xmlhttp.send();
                }
                </script>
            
            <div id="poll">
                <h3>ye nah ye nah</h3>
                <form>
                ye: <input type="radio" name="vote" value="0" onclick="getVote(this.value)"><br>
                nah: <input type="radio" name="vote" value="1" onclick="getVote(this.value)">
                </form>
            </div>

        </main>
        
        <aside class="box">
			
			<h2>Poem Generators</h2>
			<p>If you’d like to generate some poems for yourself, here are some online generators that you 
			can use…</p>
            <ul>
			<li>
			<a href="https://www.poem-generator.org.uk">Poem Generator UK</a>
			</li>
            </ul>    
			
            <ul>
			<li>
			<a href="http://www.languageisavirus.com/automatic_poetry_generator.php">Language is a Virus</a>
			</li>
            </ul>
			
			<p>Know of a poetry generator not listed above?  Please <a href="contact.php">let me know about it</a> and I will add it to the list.
		</p>
        </aside>
        
        <?php include "bottombit.php"; ?>