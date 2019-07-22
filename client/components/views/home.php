    <center><img class="map" draggable="false" usemap="#image-map" src="./public/assets/img/mapn2.jpg" alt="GTA Map" /></center>
    <!--<map name="image-map">
        <area target="" alt="Nord" title="Nord" href="#" coords="207,245,234,218,252,202,258,192,268,191,281,183,291,167,297,154,303,136,313,119,327,109,343,96,355,84,368,88,377,95,390,101,398,104,421,107,444,105,462,105,476,113,486,120,494,133,511,141,516,158,524,176,527,190,529,197,540,206,549,221,557,236,557,245,535,258,525,273,518,262,522,247,514,232,494,230,473,238,447,247,428,251,411,252,405,247,405,260,389,264,381,260,373,252,365,248,355,253,340,259,333,262,330,273,329,282,311,286,292,280,276,270,265,263,254,263,254,272,244,273,228,267,212,255" shape="poly">
        <area target="" alt="Ouest" title="Ouest" href="#" coords="205,247,193,257,182,275,175,295,168,312,152,318,133,317,133,328,140,340,153,343,160,352,163,363,157,389,156,402,183,405,195,403,214,396,229,392,245,392,256,388,266,380,277,375,295,368,310,365,325,361,344,352,367,339,367,332,358,322,355,316,337,310,332,291,331,283,319,281,303,282,285,275,275,270,270,262,254,264,251,273,232,269,218,258" shape="poly">
        <area target="" alt="Est" title="Est" href="#" coords="364,326,371,321,379,310,394,309,413,309,431,307,451,303,464,290,479,287,488,291,494,296,508,295,519,283,525,271,542,251,555,248,557,262,559,283,558,295,554,313,545,331,538,348,535,357,531,361,531,375,535,389,532,397,529,422,526,446,523,459,518,472,510,480,495,466,486,455,474,453,465,464,461,477,452,460,449,442,444,432,430,425,420,419,409,411,398,402,387,401,371,387,366,373,364,356,361,341" shape="poly">
        <area target="" alt="Sud Ouest" title="Sud Ouest" href="#" coords="154,403,147,408,138,417,132,431,133,445,134,458,131,470,126,485,125,498,130,512,135,527,131,544,136,554,150,564,162,567,175,578,188,583,194,586,202,575,214,580,224,586,233,581,237,575,246,569,248,562,249,552,259,546,281,547,293,547,306,545,319,542,327,543,329,532,331,515,334,497,333,479,336,450,337,429,338,403,347,374,355,352,360,343,341,353,326,360,309,362,287,368,284,373,265,380,260,386,247,391,231,390,217,395,203,398,187,403,177,403,166,400" shape="poly">
        <area target="" alt="Sud Est" title="Sud Est" href="#" coords="361,342,356,350,350,371,344,383,341,394,339,406,336,424,336,437,335,454,333,474,333,491,332,506,330,531,326,541,345,544,362,549,392,559,411,568,424,581,435,587,451,591,475,591,496,592,510,590,522,581,527,564,531,546,531,531,531,515,524,500,516,487,510,478,492,462,485,455,478,454,467,459,462,468,462,477,454,469,454,463,451,454,448,444,445,435,439,431,423,421,408,413,397,401,389,402,382,397,370,384,367,371,365,354" shape="poly">
    </map>-->
    <!--<div id="nord" class="empty" ondrop="drop(event)" ondragover="allowDrop(event)" style="padding:15px;height:200px;width:351px;position:absolute; top:0; left:50%; transform:translate(-50%,0%); margin-top:105px;margin-left:44px;">
        <svg height="210" width="351">
            <polygon points="0,165,27,138,45,122,51,112,61,111,74,103,84,87,90,74,96,56,106,39,116,29,136,16,148,4,161,8,170,15,183,21,191,24,214,27,237,25,255,25,269,33,279,40,287,53,304,61,309,78,317,96,320,110,322,117,333,126,342,141,350,156,350,165,328,178,318,193,311,182,315,167,307,152,287,150,266,158,240,167,221,171,204,172,198,167,198,180,182,184,174,180,166,172,158,168,148,173,133,179,126,182,123,193,122,202,104,206,85,200,69,190,58,183,47,183,47,192,37,193,37,187,5,175" style="fill:black;stroke:#0080FF;stroke-width:3" />
        </svg>
        <div class="contain" id="1">
            <?php
                foreach($nordPatr as $nord)
                {
                    echo '<div id="' . strtolower($nord['nom']) . '" ondragstart="drag(event)" class="patrol" draggable="true">' . $nord['nom'] . '</div>';
                }
            ?>
        </div>
    </div>
    <div id="est" class="empty" ondrop="drop(event)" ondragover="allowDrop(event)" style="padding:15px;height:220px;width:220px;position:absolute; top:0; left:50%; transform:translate(-50%,0%); margin-top:260px;margin-left:113px;z-index:2;">
        <svg height="250" width="220">
            <polygon points="20,91,27,86,35,75,50,74,69,74,87,72,107,68,120,55,135,52,144,56,150,61,164,60,175,48,181,36,198,16,211,13,213,27,215,48,214,60,210,78,201,96,194,113,191,122,187,126,187,140,191,154,188,162,185,187,182,211,179,224,174,237,166,245,151,231,142,220,130,218,121,229,117,242,108,225,105,207,100,197,86,190,76,184,65,176,54,167,43,166,27,152,22,138,20,121,17,106" style="fill:black;stroke:#0080FF;stroke-width:3" />
        </svg>
        <div class="contain" id="3">
            <?php
                foreach($estPatr as $est)
                {
                    echo '<div id="' . strtolower($est['nom']) . '" ondragstart="drag(event)" class="patrol" draggable="true">' . $est['nom'] . '</div>';
                }
            ?>
        </div>
    </div>
    <div id="ouest" class="empty" ondrop="drop(event)" ondragover="allowDrop(event)" style="z-index:2;padding:15px;height:130px;width:230px;position:absolute; top:270px; left:50%; transform:translate(-50%,0%); margin-left:-110px;">
        <svg height="160" width="250">
            <polygon points="85,0,73,10,62,28,55,48,48,65,32,71,13,70,13,81,20,93,33,96,40,105,43,116,37,142,36,155,63,158,75,156,94,149,109,145,125,145,136,141,146,133,157,128,175,121,190,118,205,114,224,105,247,92,247,85,238,75,235,69,217,63,212,44,211,36,199,34,183,35,165,28,155,23,150,15,134,17,131,26,112,22,98,11" style="fill:black;stroke:#0080FF;stroke-width:3" />
        </svg>
        <div class="contain" id="2">
            <?php
                foreach($ouestPatr as $ouest)
                {
                    echo '<div id="' . strtolower($ouest['nom']) . '" ondragstart="drag(event)" class="patrol" draggable="true">' . $ouest['nom'] . '</div>';
                }
            ?>
        </div>
    </div>
    <div id="sud-est" class="empty" ondrop="drop(event)" ondragover="allowDrop(event)" style="padding:15px;height:300px;width:220px;position:absolute; top:0; left:50%; transform:translate(-50%,0%); margin-top:365px;margin-left:95px;z-index:1;">
        <svg height="260" width="210">
            <polygon points="36,2,31,10,25,31,19,43,16,54,14,66,11,84,11,97,10,114,8,134,8,151,7,166,5,191,1,201,20,204,37,209,67,219,86,228,99,241,110,247,126,251,150,251,171,252,185,250,197,241,202,224,206,206,206,191,206,175,199,160,191,147,185,138,167,122,160,115,153,114,142,119,137,128,137,137,129,129,129,123,126,114,123,104,120,95,114,91,98,81,83,73,72,61,64,62,57,57,45,44,42,31,40,14" style="fill:black;stroke:#0080FF;stroke-width:3" />
        </svg>
        <div class="contain" id="5">
            <?php
                foreach($sudestPatr as $sudest)
                {
                    echo '<div id="' . strtolower($sudest['nom']) . '" ondragstart="drag(event)" class="patrol" draggable="true">' . $sudest['nom'] . '</div>';
                }
            ?>
        </div>
    </div>
    <div id="sud-ouest" class="empty" ondrop="drop(event)" ondragover="allowDrop(event)" style="padding:15px;height:250px;width:240px;position:absolute; top:0; left:50%; transform:translate(-50%,0%); margin-top:365px;margin-left:-95px;">
        <svg height="250" width="240">
            <polygon points="29,63,22,68,13,77,7,91,8,105,9,118,6,130,1,145,0,158,5,172,10,187,6,204,11,214,25,224,37,227,50,238,63,243,69,246,77,235,89,240,99,246,108,241,112,235,121,229,123,222,124,212,134,206,156,207,168,207,181,205,194,202,202,203,204,192,206,175,209,157,208,139,211,110,212,89,213,63,222,34,230,12,235,3,216,13,201,20,184,22,162,28,159,33,140,40,135,46,122,51,106,50,92,55,78,58,62,63,52,63,41,60" style="fill:black;stroke:#0080FF;stroke-width:3" />
        </svg>
        <div class="contain" id="4">
            <?php
                foreach($sudouestPatr as $sudouest)
                {
                    echo '<div id="' . strtolower($sudouest['nom']) . '" ondragstart="drag(event)" class="patrol" draggable="true">' . $sudouest['nom'] . '</div>';
                }
            ?>
        </div>
    </div>-->
    <?php
        foreach($punaises as $punaise)
        {
            $top = $punaise['emplacementy'] + 5;
            echo '<div onclick="delete_point(\'' . $punaise['punaid'] . '\')" class="punaise" id="' . $punaise['punaid'] . '" style="background-color:' . $punaise['color'] . ';margin-top:' . $punaise['emplacementy'] . 'px;margin-left:' . $punaise['emplacementx'] . 'px;"></div>';
            if(!is_null($punaise['texte']))
                echo '<div class="textepuce" style="margin-top:' . $top . 'px;margin-left:' . $punaise['emplacementx'] . 'px;" id="t' . $punaise['punaid'] . '">' . $punaise['texte'] . '</div>';
        }
    ?>