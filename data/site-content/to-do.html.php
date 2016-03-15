<div class="jumbotron">
    <div class="container">
        <h1>To Do list</h1>
        <p>
            This is a series of pending To Do things i would like to implement.
            <br /> <strong>Suggestions are welcome. Collaborations via <a href="<?php echo FEDIVERSE_GITHUB;  ?>">Github</a> even more.</strong>
        </p>        
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-9" role="main">

            <div class="bs-docs-section">

                
                <h1 class="page-header" id="the-idea">
                    <a data-anchorjs-icon="" aria-label="Anchor link for: the-idea" href="#the-idea" class="anchorjs-link " style="font-family: anchorjs-icons; font-style: normal; font-variant: normal; font-weight: normal; position: absolute; margin-left: -1em; padding-right: 0.5em;"></a>
                    Pendings and Suggestions
                </h1>
                <p class="lead">
                    This is a list of pendings and suggestions to implement in future versions.
                    
                    <ul>
                        <li><strong>[ DONE ]</strong> Separate status checks (ping) from more heavy-load queries to nodes, so I can reduce server check for nodes from 15 min, to 5.</li>
                        <li><strong>[ DONE ]</strong> Make a much better "Add node" functionality, now its manual. Currently, nodes suggested by users are stored in a plain text file and later processed manually.</li>
                        <li><strong>[ ! ]</strong> Build a <strong>score system</strong> to order nodes according to that number which should take into consideration uptime, if its open for signups, if it encourages free speech, and users votes for nodes in question.</li>
                        <li>For better transparency, make available at the homepage the last log file from the fediverse parser.</li>
                        <li>Add the positibility to have nodes pages with the details of the node, a up/down vote functionality and a comment syste. Disqus?</li>
                        <li>Add a button for those newcommers who just want to be taken to "the best possible node", based on the Score system.</li>
                        <li>Create a fallback method to get the geo data for IP addresses from API, when that information is not available in the local MxMind geoip db.</li>
                        <li>Add a fallback method for the cross browser xhr query that checks if nodes are up.</li>
                        <li>Add a way to categorize nodes (so users can filter), in categories like: adult, shitposting, private, conservative, liberal, etc. This can be contriversial or unfair for certain nodes, so, think it over again later.</li>
                        <li><strong>[ ! ]</strong> Code the Map with the Lat/Long coordinates obtained from the MaxMind Sqlite Db.</li>
                        <li>Query for the Statistics plugin when exists, for each node. Give an extra "score value" to nodes that are transparent to the statistics.</li>
                        <li>Add the possibility to ping every 5-10 minutos in the frontend, for users who want to keep the fediverse.org site open and have an status.</li>
                    </ul>                    
                </p>
                <p class="lead">
                    Soon I will add a simple way for people to share opinions and suggestions. For now feel free to open an issue at the <a href="<?php echo FEDIVERSE_GITHUB;  ?>/issues">Github page</a> for the project.
                </p>
                                
            </div>

            
            <p>&nbsp;</p>

            
        </div>

        <div role="complementary" class="col-md-3">
            <br />
            <img src="/images/make-it-zero.jpg" alt="make-it-zero" class="img-responsive" />
            <br />
        </div>
        
    </div>
</div>
