<?php require'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-xs-1 col-sm-3"></div>
        <div class="col-xs-10 col-sm-6 customdetails"> 
        <div id="DIV_2">
            <div id="DIV_3">
                <div id="DIV_4">
                    <div id="DIV_5">
                    </div><img height="120" width="120" src="<?php echo $details[0]->img; ?>" id="IMG_6" alt=""><br id="BR_7">
                   
                    <h4 id="H4_12">
                        <span id="SPAN_13"><?php echo $details[0]->cname; ?></span>
                    </h4>
                    <h4 id="H4_14">
                    </h4>
                </div>
                <div id="DIV_17">
                    <div id="DIV_18">
                    </div>
                    <div id="DIV_19">
                        <div id="DIV_20">
                            <h2 id="H2_21">
                            <?php echo $details[0]->jname; ?>
                            </h2>
                            <h2 id="H2_22">
                            <?php echo $details[0]->cname; ?> | <?php echo $details[0]->jcity; ?> , <?php echo $details[0]->jcountry; ?>
                            </h2>
                        </div>
                        <div id="DIV_23">
                            <div id="DIV_24">
                                <a href="/job/job_apply?apply=<?php echo $details[0]->jid; ?>" id="A_25">Apply</a>
                            </div>
                        </div>
                    </div>
                    
                    <div id="DIV_42">
                        <div id="DIV_43">
                            <span id="SPAN_44"></span>
                        </div>
                        <div id="DIV_45">
                            <!-- ngRepeat: skill in jobSkills -->
                            <span id="SPAN_46"><?php echo $details[0]->keywords; ?></span>

                        </div>
                    </div>
                </div>
            </div>
            <div id="DIV_52">
                <div id="DIV_53">
                    <div id="DIV_54">
                        We need <strong id="STRONG_55"><?php echo $details[0]->jname; ?></strong> for our branches in <?php echo $details[0]->jcity; ?> <?php echo $details[0]->jlocation; ?>
                        <ul id="UL_56">
                            <li id="LI_57">
                                Candidate must be experienced in relevant field
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="DIV_58">
                    <div id="DIV_59">
                        <div id="DIV_60">
                            <table id="TABLE_61">
                                <tbody id="TBODY_62">
                                    <tr class="TR">
                                        <td id="TD_64">
                                            Industry
                                        </td>
                                        <td id="TD_65">
                                            <span id="SPAN_66"><?php echo $details[0]->jname; ?></span>
                                        </td>
                                    </tr>
                                    <tr id="TR_67">
                                        <td id="TD_68">
                                            Functional Area
                                        </td>
                                        <td id="TD_69">
                                            <span id="SPAN_70"><?php echo $details[0]->skill; ?></span>
                                        </td>
                                    </tr>
                                    <tr id="TR_71">
                                        <td id="TD_72">
                                            Total Positions
                                        </td>
                                        <td id="TD_73">
                                            <span id="SPAN_74"><?php echo $details[0]->totpos; ?></span>
                                        </td>
                                    </tr>
                                    <tr id="TR_75">
                                        <td id="TD_76">
                                            Job Location
                                        </td>
                                        <td id="TD_77">
                                        <?php echo $details[0]->jlocation; ?>  <?php echo $details[0]->jcity; ?> <br id="BR_78"><?php echo $details[0]->jcountry; ?>
                                        </td>
                                    </tr>
                                    <tr id="TR_79">
                                        <td id="TD_80">
                                            Job Type
                                        </td>
                                        <td id="TD_81">
                                            <span id="SPAN_82"><?php echo $details[0]->type; ?></span>
                                        </td>
                                    </tr>
                                    <tr id="TR_83">
                                        <td id="TD_84">
                                            Gender
                                        </td>
                                        <td id="TD_85">
                                            <span id="SPAN_86"><?php echo $details[0]->gender; ?></span>
                                        </td>
                                    </tr>
                                    <tr id="TR_87">
                                        <td id="TD_88">
                                            Education
                                        </td>
                                        <td id="TD_89">
                                        <?php echo $details[0]->edu; ?>
                                        </td>
                                    </tr>
                                    <tr id="TR_90">
                                        <td id="TD_91">
                                            Degree Title
                                        </td>
                                        <td id="TD_92">
                                        <?php echo $details[0]->degtit; ?>
                                        </td>
                                    </tr>
                                    <tr id="TR_93">
                                        <td id="TD_94">
                                            Career Level
                                        </td>
                                        <td id="TD_95">
                                            <span id="SPAN_96"><?php echo $details[0]->carrier; ?></span>
                                        </td>
                                    </tr>
                                    <tr id="TR_97">
                                        <td id="TD_98">
                                            Salary
                                        </td>
                                        <td id="TD_99">
                                            <span id="SPAN_100"></span><?php echo $details[0]->sal; ?><span id="SPAN_101"></span> / <span id="SPAN_102">Monthly</span>
                                        </td>
                                    </tr>
                                    <tr id="TR_103">
                                        <td id="TD_104">
                                            Experience
                                        </td>
                                        <td id="TD_105">
                                            <span id="SPAN_106"><?php echo $details[0]->exper; ?></span>
                                        </td>
                                    </tr>
                                    <tr id="TR_107">
                                        <td id="TD_108">
                                            Posted Date
                                        </td>
                                        <td id="TD_109">
                                            <span id="SPAN_110"><?php echo $details[0]->time; ?></span>
                                        </td>
                                    </tr>
                                    <tr id="TR_111">
                                        <td id="TD_112">
                                            Apply By Date
                                        </td>
                                        <td id="TD_113">
                                            <span id="SPAN_114"><?php echo $details[0]->appdate; ?></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div id="DIV_115">
                <div id="DIV_116">
                    <div id="DIV_117">
                        <div id="DIV_118">
                            <div id="DIV_119">
                                <div id="DIV_120">

                                    <button type="button" id="BUTTON_121">
                                        <span id="SPAN_122">×</span>
                                    </button>
                                    <h4 id="H4_123">
                                        Retail Sales Manager | Walkeaze Karachi, Pakistan
                                    </h4>
                                </div>
                                <div id="DIV_124">
                                    <div id="DIV_125">
                                        <div id="DIV_126">
                                            <h4 id="H4_127">
                                                Choose location
                                            </h4>
                                        </div>
                                        <div id="DIV_128">
                                            <!-- ngRepeat: shift in jobLocations -->

                                           <!--Repeat: shift in jobLocations -->

                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <!-- /.modal-content -->

                            </div>
                            <!-- /.modal-dialog -->

                        </div>
                        <!-- /.modal -->

                    </div>
                </div>
            </div>
        </div>
        
    </div>
        
        </div>
       
    </div>
    <div class="col-xs-1 col-sm-3"></div>


<?php require'footer.html';    ?>