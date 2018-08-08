<?php
/**
 * Created by PhpStorm.
 * User: Loloshka-pc
 * Date: 29.05.2018
 * Time: 2:51
 */
include '/views/templates/header.php';
?>
    <div id="base" class="">
        <link href="libs/css/admin/axure_rp_page.css" type="text/css" rel="stylesheet"/>
        <link href="libs/css/admin/datastyles.css" type="text/css" rel="stylesheet"/>
        <link href="libs/css/admin/styles.css" type="text/css" rel="stylesheet"/>

        <!-- Unnamed (Rectangle) -->
        <div id="u0" class="ax_default box_1">
            <div id="u0_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u1" class="text" style="display:none; visibility: hidden">
                <p><span></span></p>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u2" class="ax_default heading_1">
            <div id="u2_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u3" class="text">
                <p><span>Добавить пользователя</span></p>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u4" class="ax_default heading_1">
            <div id="u4_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u5" class="text">
                <p><span>Имя</span></p>
            </div>
        </div>
<form action="/adduser" method="post" enctype="multipart/form-data">
        <!-- Unnamed (Text Field) -->
        <div id="u6" class="ax_default text_field">
            <input id="u6_input" type="text" name="name" value=""/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u7" class="ax_default heading_1">
            <div id="u7_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u8" class="text">
                <p><span>Фамилия</span></p>
            </div>
        </div>

        <!-- Unnamed (Text Field) -->
        <div id="u9" class="ax_default text_field">
            <input id="u9_input" type="text" name="fam" value=""/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u10" class="ax_default heading_1">
            <div id="u10_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u11" class="text">
                <p><span>Отчество</span></p>
            </div>
        </div>

        <!-- Unnamed (Text Field) -->
        <div id="u12" class="ax_default text_field">
            <input id="u12_input" type="text" name="otch" value=""/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u13" class="ax_default heading_1">
            <div id="u13_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u14" class="text">
                <p><span>Отдел</span></p>
            </div>
        </div>

        <!-- Unnamed (Text Field) -->
        <div id="u15" class="ax_default text_field">
            <input id="u15_input" type="text" name="otdel" value=""/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u16" class="ax_default heading_1">
            <div id="u16_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u17" class="text">
                <p><span>Информация о сотруднике</span></p>
            </div>
        </div>

        <!-- Unnamed (Text Area) -->
        <div id="u18" class="ax_default text_area">
            <textarea id="u18_input" name="info"></textarea>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u23" class="ax_default heading_1">
            <div id="u23_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u24" class="text">
                <p><span>Логин</span></p>
            </div>
        </div>

        <!-- Unnamed (Text Field) -->
        <div id="u25" class="ax_default text_field">
            <input id="u25_input" type="text" name="login" value=""/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u26" class="ax_default heading_1">
            <div id="u26_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u27" class="text">
                <p><span>Пароль</span></p>
            </div>
        </div>

        <!-- Unnamed (Text Field) -->
        <div id="u28" class="ax_default text_field">
            <input id="u28_input" type="password" name="pass" value=""/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u29" class="ax_default heading_1">
            <div id="u29_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u30" class="text">
                <p><span>Подтверждение</span></p>
            </div>
        </div>


        <!-- Unnamed (Text Field) -->
        <div id="u33" class="ax_default text_field">
            <input id="u33_input" type="password" value=""/>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u34" class="ax_default primary_button">
            <div id="u34_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u35" class="text">
                <p><input type="submit" value="Отправить"></p>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u36" class="ax_default heading_1">
            <div id="u36_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u37" class="text">
                <p><span>Пользователи</span></p>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u38" class="ax_default box_1">
            <div id="u38_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u39" class="text" style="display:none; visibility: hidden">
                <p><span></span></p>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u40" class="ax_default heading_1">
            <div id="u40_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u41" class="text">
                <p><span>Логин</span></p>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u42" class="ax_default heading_1">
            <div id="u42_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u43" class="text">
                <p><span>Имя</span></p>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u44" class="ax_default heading_1">
            <div id="u44_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u45" class="text">
                <p><span>Фамилия</span></p>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u46" class="ax_default heading_1">
            <div id="u46_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u47" class="text">
                <p><span>Отчество</span></p>
            </div>
        </div>

        <!-- Unnamed (Rectangle) -->
        <div id="u48" class="ax_default link_button">
            <div id="u48_div" class=""></div>
            <!-- Unnamed () -->
            <div id="u49" class="text">
                <p><span>Удалить пользователя</span></p>
            </div>
        </div>

    <div id="u19" class="ax_default heading_1">
        <div id="u19_div" class=""></div>
        <!-- Unnamed () -->
        <div id="u20" class="text">
            <p><span>Фото</span></p>
        </div>
    </div>

    <!-- Unnamed (Rectangle) -->
    <div id="u21" class="ax_default primary_button">
        <input type="file" name="image" placeholder="" value="">
    </form>

    </div>
<?php include '/views/templates/footer.php';?>