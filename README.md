# Fediverse.org
The Fediverse.org an is attemp to map all public nodes that are part of the GNU Social Fediverse as a way to contribute to the grow of the community, by offering a neutral starting point to newcommers, while being a knowledge-base for admins & users. 
<br /><br />
Fediverse.org works simple. 
<br />
There is frontend part which includes a pre-craweled table of the main nodes that are part of the !frediverse, among other things, like handling the page, new nodes submission, etc.

<br /><br />
This table of nodes is generated every 15 minutes by the parser, which is executed via cronjob by the ./fediadmin.php file. 
<br />
This parser generates an .html table with all nodes and updates the sqlite database where all the information is stored.
<br />
This ./fediadmin.php file also includes other methods like "generate-table" which generates the .html table shown in the frontend but without crawling all nodes for new information.
<br />
This ./fediadmin.php can be executed via command line (it is recommended), unfortunately the server where the site is stored doesn't allow commands in my cronjobs so I am crawling via a simple wget.
<br /><br />
More information can be found at <a href="http://www.fediverse.org/">fediverse.org</a>. Later I promise to make a more useful README file here on Github. 
<br /><br />
This is a community, non-profit project. Feel free to collaborate or donate if you want to contribute with the server.

<h2>TODO</h2>
Please visit the site: <a href="http://www.fediverse.org/to-do">http://www.fediverse.org/to-do</a>
