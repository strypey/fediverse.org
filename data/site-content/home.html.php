<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <p>
            <strong>Fediverse.org</strong> is an attemp to map all public nodes that are part of the <a href="https://gnu.io/social/">GNU Social</a> Fediverse
            as a way to contribute to the grow of the community, by offering a <strong>neutral</strong> starting point to newcommers, while
            being a knowledge-base for admins & users.
        </p>
        <p>
            <a class="btn btn-primary btn-lg" href="<?php echo FEDIVERSE_GITHUB;  ?>" role="button" target="_blank">Contribute &raquo;</a>
            <a class="btn btn-default btn-lg hidden-xs" href="/about" role="button">Learn more &raquo;</a>
        </p>
    </div>
</div>

<br />

<div class="container">
    <div class="row">
        <ul role="tablist" class="nav nav-tabs" id="fediverse-tabs">
            <li class="active" role="presentation">
                <a aria-expanded="true" aria-controls="fediverse-table-content" data-toggle="tab" role="tab" id="fediverse-table-tab" href="#fediverse-table-content">
                    Table
                </a>
            </li>
            <li role="presentation">
                <a aria-controls="fediverse-map-content" data-toggle="tab" id="fediverse-map-tab" role="tab" href="#fediverse-map-content">
                    Map
                </a>
            </li>
            <li style="padding-top:10px;margin-right:5px;float:right;" class="hidden-xs">
                <span class="label label-default text-right" style="font-size:18px;">
                    <?php echo $fedib->get_nodes_count();  ?> nodes
                </span>
            </li>
            <li style="padding-top:2px;margin-right:5px;float:right;">
                <button id="btn-check-up" type="button" class="btn btn-primary text-right" data-loading-text="PINGING...">
                    <span aria-hidden="true" class="glyphicon glyphicon-refresh"></span>
                    PING <span class="hidden-xs">NODES</span>
                </button>
            </li>                    
        </ul>

        <div class="tab-content" id="fediverse-content">
            
            <!-- TABLED FEDIVERSE  -->            
            <div aria-labelledby="fediverse-table-tab" id="fediverse-table-content" class="tab-pane fade active in" role="tabpanel">
                <br />
                <?php

                // print generation time of the table
                if (file_exists(FEDIVERSE_NODES_TABLE)) {
                    
                    // include the generated table
                    require_once(FEDIVERSE_NODES_TABLE);

                    // meta info
                    $change_time = filectime(FEDIVERSE_NODES_TABLE);
                    echo '<br /><div role="alert" class="alert alert-warning">';
                    echo '<strong>Table generated: </strong>'.date("F d Y H:i:s", $change_time).", ".date_ago($change_time).". ";
                    echo '<strong>Current server time:</strong> '.date("F d Y H:i:s.");
                    echo '</div>';
                    echo '<p>';
                    echo 'We encourage the use of the <a href="https://dev.pztrn.name/gstools/statistics-gnusocial-plugin" target="_blank">Statistics plugin</a>.';
                    echo ' If you more info about the !fediverse, please visit our friends at <a href="http://gstools.org" target="_blank">gstools.org</a>.';
                    echo '</p>';
                    echo '<br /><br />';
                    
                }else{

                    echo "<p>Sorry, the table is not yet generated. Please reload.</p>";

                }

                ?>
            </div>
            
            <!-- MAPED FEDIVERSE  -->
            <div aria-labelledby="fediverse-map-tab" id="fediverse-map-content" class="tab-pane fade" role="tabpanel">
                
            </div>
            
        </div>
    </div>
</div>
