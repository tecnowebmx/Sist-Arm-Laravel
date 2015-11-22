@extends('layout')

@section('content')
    <div class="maincontent">
        <div class="contentinner content-dashboard">
            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Welcome!</strong> This alert needs your attention, but it's not super important.
            </div><!--alert-->

            <div class="row-fluid">
                <div class="span8">
                    <ul class="widgeticons row-fluid">
                        <li class="one_fifth"><a href=""><img src="img/gemicon/location.png" alt="" /><span>Maps</span></a></li>
                        <li class="one_fifth"><a href=""><img src="img/gemicon/image.png" alt="" /><span>Media</span></a></li>
                        <li class="one_fifth"><a href=""><img src="img/gemicon/reports.png" alt="" /><span>Reports</span></a></li>
                        <li class="one_fifth"><a href=""><img src="img/gemicon/edit.png" alt="" /><span>New Article</span></a></li>
                        <li class="one_fifth last"><a href=""><img src="img/gemicon/mail.png" alt="" /><span>Check Mail</span></a></li>
                        <li class="one_fifth"><a href=""><img src="img/gemicon/calendar.png" alt="" /><span>Events</span></a></li>
                        <li class="one_fifth"><a href=""><img src="img/gemicon/users.png" alt="" /><span>Manage Users</span></a></li>
                        <li class="one_fifth"><a href=""><img src="img/gemicon/settings.png" alt="" /><span>Settings</span></a></li>
                        <li class="one_fifth"><a href=""><img src="img/gemicon/archive.png" alt="" /><span>Archives</span></a></li>
                        <li class="one_fifth last"><a href=""><img src="img/gemicon/notify.png" alt="" /><span>Notifications</span></a></li>
                    </ul>

                    <br />

                    <h4 class="widgettitle">Report Summary</h4>
                    <div class="widgetcontent">
                        <div id="chartplace2" style="height:300px;"></div>
                    </div><!--widgetcontent-->

                    <h4 class="widgettitle">Recent Articles</h4>
                    <div class="widgetcontent">
                        <div id="tabs">
                            <ul>
                                <li><a href="#tabs-1"><span class="icon-forward"></span> Technology</a></li>
                                <li><a href="#tabs-2"><span class="icon-eye-open"></span> Entertainment</a></li>
                                <li><a href="#tabs-3"><span class="icon-leaf"></span> Fitness &amp; Health</a></li>
                            </ul>
                            <div id="tabs-1">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Submitted By</th>
                                        <th>Date Added</th>
                                        <th class="center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href=""><strong>Excepteur sint occaecat cupidatat non...</strong></a></td>
                                        <td><a href="">admin</a></td>
                                        <td>Jan 02, 2013</td>
                                        <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href=""><strong>Sed ut perspiciatis unde omnis iste natus...</strong></a></td>
                                        <td><a href="">themepixels</a></td>
                                        <td>Jan 02, 2013</td>
                                        <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href=""><strong>Sed ut perspiciatis unde omnis iste natus</strong></a></td>
                                        <td><a href="">johndoe</a></td>
                                        <td>Jan 01, 2013</td>
                                        <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href=""><strong>Quis autem vel eum iure reprehenderi...</strong></a></td>
                                        <td><a href="">amanda</a></td>
                                        <td>Jan 01, 2013</td>
                                        <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href=""><strong>Nemo enim ipsam voluptatem quia</strong></a></td>
                                        <td><a href="">mandylane</a></td>
                                        <td>Dec 31, 2012</td>
                                        <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="tabs-2">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Submitted By</th>
                                        <th>Date Added</th>
                                        <th class="center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href=""><strong>Nemo enim ipsam voluptatem quia</strong></a></td>
                                        <td><a href="">mandylane</a></td>
                                        <td>Jan 04, 2012</td>
                                        <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href=""><strong>Excepteur sint occaecat cupidatat non...</strong></a></td>
                                        <td><a href="">admin</a></td>
                                        <td>Jan 02, 2013</td>
                                        <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href=""><strong>Sed ut perspiciatis unde omnis iste natus...</strong></a></td>
                                        <td><a href="">themepixels</a></td>
                                        <td>Jan 02, 2013</td>
                                        <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href=""><strong>Sed ut perspiciatis unde omnis iste natus</strong></a></td>
                                        <td><a href="">johndoe</a></td>
                                        <td>Jan 01, 2013</td>
                                        <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href=""><strong>Quis autem vel eum iure reprehenderi...</strong></a></td>
                                        <td><a href="">amanda</a></td>
                                        <td>Jan 01, 2013</td>
                                        <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div id="tabs-3">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Submitted By</th>
                                        <th>Date Added</th>
                                        <th class="center">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href=""><strong>Quis autem vel eum iure reprehenderi...</strong></a></td>
                                        <td><a href="">amanda</a></td>
                                        <td>Jan 03, 2013</td>
                                        <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href=""><strong>Nemo enim ipsam voluptatem quia</strong></a></td>
                                        <td><a href="">mandylane</a></td>
                                        <td>Dec 31, 2012</td>
                                        <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href=""><strong>Excepteur sint occaecat cupidatat non...</strong></a></td>
                                        <td><a href="">admin</a></td>
                                        <td>Jan 02, 2013</td>
                                        <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href=""><strong>Sed ut perspiciatis unde omnis iste natus...</strong></a></td>
                                        <td><a href="">themepixels</a></td>
                                        <td>Jan 02, 2013</td>
                                        <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href=""><strong>Sed ut perspiciatis unde omnis iste natus</strong></a></td>
                                        <td><a href="">johndoe</a></td>
                                        <td>Jan 01, 2013</td>
                                        <td class="center"><a href="" class="btn"><span class="icon-edit"></span> Edit</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!--#tabs-->
                    </div><!--widgetcontent-->


                </div><!--span8-->
                <div class="span4">
                    <h4 class="widgettitle nomargin">Some Simple Instructions</h4>
                    <div class="widgetcontent bordered">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </div><!--widgetcontent-->

                    <h4 class="widgettitle nomargin">Events this month</h4>
                    <div class="widgetcontent">
                        <div id="calendar" class="widgetcalendar"></div>
                    </div><!--widgetcontent-->

                    <h4 class="widgettitle">Site Impressions</h4>
                    <div class="widgetcontent">
                        <div id="bargraph2" style="height:200px;"></div>
                    </div><!--widgetcontent-->

                    <h4 class="widgettitle">Recently Added Articles</h4>
                    <div class="widgetcontent">
                        <div id="accordion" class="accordion">
                            <h3><a href="#">Mauris mauris ante, blandit et</a></h3>
                            <div>
                                <p>
                                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                </p>
                            </div>
                            <h3><a href="#">Donec et ante phasellus eu ligula</a></h3>
                            <div>
                                <p>
                                    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                    suscipit faucibus urna.
                                </p>
                            </div>
                            <h3><a href="#">Quam ante aliquam nisi</a></h3>
                            <div>
                                <p>
                                    Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                    Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                    ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                    lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                </p>
                                <ul class="margin1020">
                                    <li>List item one</li>
                                    <li>List item two</li>
                                    <li>List item three</li>
                                </ul>
                            </div>
                            <h3><a href="#">Pellentesque habitant morbi</a></h3>
                            <div>
                                <p>
                                    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                    mauris vel est.
                                </p>
                                <p>
                                    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                    inceptos himenaeos.
                                </p>
                            </div>
                        </div><!--#accordion-->
                    </div><!--widgetcontent-->
                </div><!--span4-->
            </div><!--row-fluid-->
        </div><!--contentinner-->
    </div><!--maincontent-->
@endsection

@section('scripts')
<script type="text/javascript">
    jQuery(document).ready(function(){

        // basic chart
        var flash = [[0, 2], [1, 6], [2,3], [3, 8], [4, 5], [5, 13], [6, 8]];
        var html5 = [[0, 5], [1, 4], [2,4], [3, 1], [4, 9], [5, 10], [6, 13]];

        function showTooltip(x, y, contents) {
            jQuery('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css( {
                position: 'absolute',
                display: 'none',
                top: y + 5,
                left: x + 5
            }).appendTo("body").fadeIn(200);
        }


        var plot = jQuery.plot(jQuery("#chartplace2"),
                [ { data: flash, label: "Flash(x)", color: "#fb6409"}, { data: html5, label: "HTML5(x)", color: "#096afb"} ], {
                    series: {
                        lines: { show: true, fill: true, fillColor: { colors: [ { opacity: 0.05 }, { opacity: 0.15 } ] } },
                        points: { show: true }
                    },
                    legend: { position: 'nw'},
                    grid: { hoverable: true, clickable: true, borderColor: '#ccc', borderWidth: 1, labelMargin: 10 },
                    yaxis: { min: 0, max: 15 }
                });

        var previousPoint = null;
        jQuery("#chartplace2").bind("plothover", function (event, pos, item) {
            jQuery("#x").text(pos.x.toFixed(2));
            jQuery("#y").text(pos.y.toFixed(2));

            if(item) {
                if (previousPoint != item.dataIndex) {
                    previousPoint = item.dataIndex;

                    jQuery("#tooltip").remove();
                    var x = item.datapoint[0].toFixed(2),
                            y = item.datapoint[1].toFixed(2);

                    showTooltip(item.pageX, item.pageY,
                            item.series.label + " of " + x + " = " + y);
                }

            } else {
                jQuery("#tooltip").remove();
                previousPoint = null;
            }

        });

        jQuery("#chartplace2").bind("plotclick", function (event, pos, item) {
            if (item) {
                jQuery("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
                plot.highlight(item.series, item.datapoint);
            }
        });


        // bar graph
        var d2 = [];
        for (var i = 0; i <= 10; i += 1)
            d2.push([i, parseInt(Math.random() * 30)]);

        var stack = 0, bars = true, lines = false, steps = false;
        jQuery.plot(jQuery("#bargraph2"), [ d2 ], {
            series: {
                stack: stack,
                lines: { show: lines, fill: true, steps: steps },
                bars: { show: bars, barWidth: 0.6 }
            },
            grid: { hoverable: true, clickable: true, borderColor: '#bbb', borderWidth: 1, labelMargin: 10 },
            colors: ["#06c"]
        });

        // calendar
        jQuery('#calendar').datepicker();


    });
</script>
@endsection