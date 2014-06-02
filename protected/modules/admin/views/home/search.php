<form action="/admin/search" method="post">
    <div >
        <div class="well home_table bordered_table">
            <div id="home_table_rank">
                <span class="header_word">
                    Rank
                </span>
                <input type="checkbox" value="all_rank" id="all_rank"/>
                <span class="header_word">
                    All
                </span>
                <select name="rank[]" id="rank" multiple="multiple">

                </select>
                <input type="button" class="home_clear_select" value="Clear"/>
            </div>
            <div id="home_table_vessel">
                <span class="header_word">
                    Type of vessel
                </span>
                <select name="vessel[]" id="vessel" multiple="multiple">
                </select>
                <input type="button" class="home_clear_select" value="Clear"/>
            </div>

            <div id="home_table_engine">
                <span class="header_word">
                    Main Engine
                </span>
                <select name="engine[]" id="engine" multiple="multiple">
                </select>
                <input type="button" class="home_clear_select" value="Clear"/>
            </div>
        </div>
        <div class="well bordered_table search_block search_block1">
            <span class="header_word">
                DWT
            </span>
            More
            <input type="text" name="dwt_more" id="dwt_more" value=""/>
            Less
            <input type="text" name="dwt_less" id="dwt_less" value=""/>
            <br/>
            <span class="header_word">
                HP &nbsp;&nbsp;
            </span>
            More
            <input type="text" name="hp_more" id="hp_more" value=""/>
            <input type="checkbox" name="us_visa"/>
            <span class="header_word">
                US Visa
            </span>
        </div>
        <div class="well bordered_table search_block search_block2">
            <span class="header_word">
                Age <
            </span>
            <input type="text" name="age_less" id="age_less"  value=""/>
            <br/>
            <span class="header_word">
                English
            </span>
            <select name="english_level" id="english_level">
                <option selected></option>
                <option value="1" >Excellent</option>
                <option value="2" >Good</option>
                <option value="3" >>Satisfactory</option>
                <option value="4" >Poor</option>
            </select>
            <br/>
            <span class="header_word">
                City
            </span>
            <select name="city" id="city">
                <option selected></option>

            </select>
            <br/>
        </div>
    </div>
    <div class="well search_block bordered_table half_of_block_width">
        <span class="header_word">
            Exclude
        </span>
        <br/>
        <input type="checkbox" name="exclude_sailor[]" value="1" />
        At sea<br/>
        <input type="checkbox" name="exclude_sailor[]" value="2" />
        Ready<br/>
        <input type="checkbox" name="exclude_sailor[]" value="3" />
        Approved<br/>
        <input type="checkbox" name="exclude_sailor[]" value="4" />
        N/A
    </div>
    <div class="well search_block bordered_table half_of_block_width">
        <input type="submit" value="Search" class="btn btn-primary"/>
        <input type="button" value="Clear All" class="btn btn-primary" id="home_clear_all"/>
    </div>
</form>

<div class="clearfix">
    <table class="table well">
        <thead>
        <tr>
            <th>#ID</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Отчество</th>
            <th>Rank</th>
            <th>Status</th>
            <th style="width: 26px;"></th>
        </tr>
        </thead>
        <tbody>
    </table>
</div>

<script>
    $(function(){
        $('#all_rank').click(function(){
            if ($(this).is(':checked')){
                $('select#rank > option').attr('selected','selected');
            } else {
                $('select#rank > option').attr('selected',false);
            }
        });
        $('select#rank').focus(function(){
            $('#all_rank').prop("checked", false);
        });
        $('.home_clear_select').click(function(){
            $(this).parent().find('select > option').attr('selected',false);
        });
        $('#home_clear_all').click(function(){
            $('option').attr('selected',false);
            $('input[type=text]').val('');
            $('input[type=checkbox]').attr('checked', false);
        });
    });
</script>
