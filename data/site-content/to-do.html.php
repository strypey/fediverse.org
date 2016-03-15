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
                    Pending tasks and suggestions
                </h1>
                <p class="lead">
                    This is a list of pending tasks and suggestions of what to implement in future versions.
                    
                    <ul>
                        <li><strong>[ ! ]</strong> Build a <strong>score system</strong> to order nodes by various criteria. We should take into consideration uptime, if they're open for public signups, if they encourages free speech, and users' votes.</li>
                        <li>Fix map markers behavior issue when zooming in/out.</li>
                        <li>For better transparency, make available at the homepage the last log file from the fediverse parser.</li>
                        <li>Add the positibility to have nodes pages with the details of the node, a up/down vote functionality and a comment syste. Disqus?</li>
                        <li>Add a button for those newcomers who just want to be taken to the "best", or highest scoring, node.</li>
                        <li>Create a fallback method to fetch geolocation data for IP addresses from an API when that information is not available in the local MaxMind database.</li>
                        <li>Add a fallback method for the cross browser xhr query that checks if nodes are up.</li>
                        <li>Add a way to categorize nodes for filtering purposes. Categories should include: adult, shitposting, private, conservative, liberal, etc. This might be considered controversial or unfair for certain nodes, so we should consider it carefully.</li>                        
                        <li>Query each node for the Statistics plugin when it exists. Give a score bonus to nodes that are transparent with their statistics.</li>
                        <li>Add the possibility to ping every 5-10 minutos in the frontend, for users who want to keep the fediverse.org site open and have an status.</li>
                    </ul>                    
                </p>
                <p class="lead">
                    Soon I will add a simpler way for people to share their opinions and suggestions. For now, feel free to open an issue on <a href="<?php echo FEDIVERSE_GITHUB; ?>/issues">GitHub</a>.
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
