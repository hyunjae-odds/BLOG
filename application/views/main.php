<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset-utf-8"/>
    <title> ODDS CONNECT 블로그</title>
    <link href="/public/lib/css/blog.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/public/lib/js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="/public/lib/js/jquery-ui.js"></script>
    <script type="text/javascript" src="/public/lib/js/modernizr-transitions.js"></script>
    <script type="text/javascript" src="/public/lib/js/jquery.masonry.min.js"></script>
    <script type="text/javascript" src="/public/lib/se2/js/service/HuskyEZCreator.js" charset="utf-8"></script>
</head>
<body>
<div class="Topline_w">
    <div class="Topline">
        <div class="Blogo"><a href="/main"><img src="/public/lib/image/blog/Blogo.jpg" alt="ODDS CONNECT" /></a><img src="/public/lib/image/blog/Blogo_p.jpg" alt="SPORTS COMMUNITY POTAL" /></div>
        <div class="right">
            <ul>
                <li><a href="">내블로그</a></li>
                <li><a href="">이웃블로그</a></li>
            </ul>
            <a href="" class="login">로그인</a>
            <a href="" class="services">services</a>
            <div class="servicesbox_w" style=";">
                <span></span>
                <div class="servicesbox">
                    <div><input id="search" onfocus="this.value=''; return true" value="블로그 전체 검색" type="text"><input type="button" value="검색"/></div>
                    <ul>
                        <li>
                            <b>매치정보<span class="new"></span></b>
                            <a href="">축구</a>
                            <a href="">야구</a>
                            <a href="">농구</a>
                            <a href="">배구</a>
                        </li>
                        <li>
                            <b>라이브</b>
                            <a href="">축구</a>
                            <a href="">야구</a>
                            <a href="">농구</a>
                            <a href="">배구</a>
                        </li>
                        <li>
                            <b>통계</b>
                            <a href="">축구</a>
                            <a href="">야구</a>
                            <a href="">농구</a>
                            <a href="">배구</a>
                        </li>
                    </ul>
                    <div class="clear"></div>
                    <p><span class="ozne_l"></span><span>모두가 주인공!</span><b><i>오즈네비 배팅경연!</i></b></p>
                </div>
                <a href="">전체 서비스 보기</a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="menuline_w">
    <div class="menuline">
        <ul class="menu">
            <li class="on"><a href="">전체 (78)</a></li>
            <li><a href="">제야의 분석 (78)</a></li>
            <li><a href="">자유게시판 (78)</a></li>
            <li><a href="">동영상게시판 (2)</a></li>
            <li><a href="">사진게시판 (15)</a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>

<!-- container -->
<div class="container_w">
    <div class="container">
        <div class="subcontent">
            <div class="masonry">
                <div class="box list_post"><div>
                        <img src="/public/uploads/<?=$user->id;?>/<?=$blog->profile_image;?>" alt="" />
                        <a href="" class="btn_post"><span></span>포스트 쓰기</a>
                        <div>
                            <h4><?=$user->nickname;?></h4>
                            <a href="" class="setting"><span></span>설정</a>
                            <div class="comment">
                                <span></span>
                                <?=$blog->profile;?>
                            </div>
                            <p>
                                <a href="">프로필<span></span></a>
                                <a href="">쪽지<span></span></a>
                                <a href="">이웃추가<span></span></a>
                            </p>
                            <input id="search" onfocus="this.value=''; return true" value="블로그 내용 검색하기" type="text"><input type="button" value="검색"/>
                        </div>
                    </div></div>
                <div class="box list_follow">
                    <div>
                        <div class="follow">
                            <ul>
                                <li class="on"><a href="#noti01">Followers (51)</a></li>
                                <li><a href="#noti02">Following (21)</a></li>
                            </ul>
                            <div id="noti01" class="list_fw list_followers">
                                <div class="list_wrap_w">
                                    <div class="list_wrap">
                                        <ul>
                                            <li><a href=""><img src="/public/lib/image/blog/img_follow01.jpg" alt="" /><b>도리도리</b></a></li>
                                            <li><a href=""><img src="/public/lib/image/blog/img_follow02.jpg" alt="" /><b>회사랑</b></a></li>
                                            <li><a href=""><img src="/public/lib/image/blog/img_follow03.jpg" alt="" /><b>로이스</b></a></li>
                                            <li><a href=""><img src="/public/lib/image/blog/img_follow04.jpg" alt="" /><b>벚꽃맛 아사히</b></a></li>
                                        </ul>
                                        <ul>
                                            <li><a href=""><img src="/public/lib/image/blog/img_follow02.jpg" alt="" /><b>도리도리</b></a></li>
                                            <li><a href=""><img src="/public/lib/image/blog/img_follow02.jpg" alt="" /><b>회사랑</b></a></li>
                                            <li><a href=""><img src="/public/lib/image/blog/img_follow03.jpg" alt="" /><b>로이스</b></a></li>
                                            <li><a href=""><img src="/public/lib/image/blog/img_follow04.jpg" alt="" /><b>벚꽃맛 아사히</b></a></li>
                                        </ul>
                                        <ul>
                                            <li><a href=""><img src="/public/lib/image/blog/img_follow03.jpg" alt="" /><b>도리도리</b></a></li>
                                            <li><a href=""><img src="/public/lib/image/blog/img_follow01.jpg" alt="" /><b>회사랑</b></a></li>
                                            <li><a href=""><img src="/public/lib/image/blog/img_follow03.jpg" alt="" /><b>로이스</b></a></li>
                                            <li><a href=""><img src="/public/lib/image/blog/img_follow04.jpg" alt="" /><b>벚꽃맛 아사히</b></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <span>1/12</span>
                                <button class="btn_prev"><span></span>prev</button>
                                <button class="btn_next"><span></span>next</button>
                                <a href="" class="neighbor_btn"><b><?=$user->nickname;?></b> 님의 이웃 새글보기<span></span></a>
                            </div>
                            <div id="noti02" class="list_fw list_following">
                                123
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box list_ad"><div><!-- 광고 -->
                        <a href=""><img src="/public/lib/image/blog/img_ad.jpg" alt="아트 어라운드" /></a>
                    </div></div>
                <div class="box bloglist"><div><!-- 리스트 -->
                        <div class="img_box">
                            <img src="/public/lib/image/blog/img02.jpg" alt="" />
                            <span><img src="/public/lib/image/blog/img_league01.jpg" alt="" /></span>
                        </div>
                        <div class="commt_box">
                            <h3>드디어 터진 SK 타선</h3>
                            <span>등록시간 : 2017.04.10 오후 02:28</span>
                            <p><a href="">같은 3월 30일에 개막한 일본 프로야구와 비교해도 kt같은 팀은 찾아볼 수 없다. 일본에선 세이부 라이온즈가 86.49%의 놀라운 잔루율을 자랑하지만 kt에는 한참 못 미친다.일본프로야구의 잔루율은 세이부에...</a></p>
                            <ul class="updown">
                                <li class="commt"><a href=""><span></span></a>81</li>
                                <li class="like"><a href=""><span></span></a>81</li>
                                <li class="dislike"><a href=""><span></span></a>81</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                $(function(){
                    var $container = $('.masonry');
                    $container.imagesLoaded(function(){
                        $container.masonry({
                            itemSelector: '.box',
                            columnWidth: 0,
                            isAnimated: !Modernizr.csstransitions
                        });
                    })
                });
            </script>

            <!-- 리스트 팝업 시작 -->
            <div class="bloglist_view_w">
                <div class="bg_b"></div>
                <div class="bloglist_view">
                    <div class="red_line">
                        <span><img src="/public/lib/image/blog/img_league01.jpg" alt=""></span>
                        <h3>맨유 vs 안더레흐트</h3>
                        <p>등록시간 : 2017.04.10 오후 02:28</p>
                    </div>
                    <div class="img_w"><img src="/public/lib/image/blog/img06.jpg" alt="" /></div>
                    <div class="cont_w">
                        <h4>‘안더레흐트 원정’ 맨유, 무난함에 숨은 함정 피하라</h4>
                        <p>[스포탈코리아] 한재현 기자= 현재 유로파리그 강력한 우승후보인 맨체스터 유나이티드(이하 맨유)가 무난한 상대인 안더레흐트를 만난다. 그러나 변수가 많은 유로파리그 특성상 승리를 완전히 장담할 수 없다.맨유는 오는 14일 오전 4시 5분(한국시간) 벨기에 브뤼셀 스타드 콘스탄트 벤덴 스톡에서 안더레흐트와 2016/2017 UEFA 유로파리그 8강 1차전을 앞두고 있다. 맨유는 최근 연속 무승부는 물론 첼시와의 FA컵 8강전 패배로 주춤세를 보였다. 즐라탄 이브라히모비치의 징계와 주력 선수들의 체력 저하로 인해 경기력에서 고전을 면치 못했다. 그러나 지난 9일 선덜랜드와의 리그 경기에서 3-0 완승으로 다시 정상 궤도로 돌아왔다. 결과는 물론 경기력 모두 가져왔다. 특히, 맨유의 핵심 역할을 하게 될 즐라탄의 복귀는 반갑다. 즐라탄은 지난 선덜랜드전에서 득점을 신고하며, 자신의 건재함을 알렸다. 또한, 지난 2013년 9월 파리생제르망(PSG)시절 안더레흐트 원정에서 4골을 넣으며 5-0 대승을 이끈 좋은 기억도 가지고 있다. 즐라탄 뒤에는 헨리크 미키타리안, 제시 린가드의 지원은 물론 마커스 래쉬포드까지 터지면서 공격에 날카로움을 더하고 있다. 선덜랜드전 기점으로 다시 돌아온 맨유의 경기력은 이번 안더레흐트 원정을 앞두고 반가운 소식이다. 원정에서 선제골은 맨유가 이번 8강전을 이끄는데 가장 큰 중요한 열쇠다. 다시 돌아온 경기력이 가능성을 높이고 있다.</p>
                    </div>
                    <div class="table_w">
                        <table class="table01">
                            <caption></caption>
                            <colgroup>
                                <col width="65px"/><col width="45px"/><col width="68px"/><col width="70px"/><col width="345px"/><col width=""/><col width="140px"/>
                            </colgroup>
                            <tr>
                                <th colspan="2">일시</th>
                                <th>종목</th>
                                <th>옵션</th>
                                <th>매치명</th>
                                <th>선택</th>
                                <th>배당률</th>
                            </tr>
                            <tr>
                                <td>11.26</td>
                                <td>18:00</td>
                                <td>축구</td>
                                <td>승무패</td>
                                <td>레알 마드리드 vs FC 바르셀로나</td>
                                <td><span>홈 승</span></td>
                                <td><b>1.88</b></td>
                            </tr>
                            <tr>
                                <td>11.26</td>
                                <td>19:00</td>
                                <td>축구</td>
                                <td>승무패</td>
                                <td>아틸레티코 마드리드 vs 데포르티보 알라베스</td>
                                <td><span>원정 승</span></td>
                                <td><b>1.88</b></td>
                            </tr>
                        </table>
                    </div>
                    <div class="tag_div">
                        <p class="tag01"><span class="tag_span">TAG</span><span>#프로야구</span><span>#프야</span><span>#승패</span></p>
                        <p class="tag02">
                            <a href="" class="sub">구독하기</a>
                            <a href="" class="url"></a>
                        </p>
                    </div>
                    <div class="comment_w">
                        <ul>
                            <li><!-- 내가 쓴 글 -->
                                <h5>스포네비***</h5>
                                <p>그렇다면 kt의 투수진은 평범한 투수력으로 돌아갈 것인가?</p>
                                <div>
                                    <span>2016-11-17&nbsp;&nbsp;&nbsp;13:52:01</span>
                                    <span>210.198.**.**</span>
                                    <div>
                                        <p class="like"><a href=""></a><span>35</span></p>
                                        <p class="bad"><a href=""></a><span>4</span></p>
                                        <b><a href="">수정</a><a href="">삭제</a></b>
                                    </div>

                                </div>
                            </li>
                            <li><!-- 기본 -->
                                <h5>스포네비***</h5>
                                <p>그렇다면 kt의 투수진은 평범한 투수력으로 돌아갈 것인가? 긍정적인 지표들도 눈에 띈다.</br>바로 볼넷 %에서 4.7로 압도적인 1위를 달리는 데다 홈런 허용도 3개로 17개를 맞은 NC와 비교하면 거의 6배 정도의 안정된 수치를 이어가고 있다.</br>바로 볼넷 %에서 4.7로 압도적인 1위를 달리는 데다 홈런 허용도 3개로 17개를 맞은 NC와 비교하면 거의 6배 정도의 안정된 수치를 이어가고 있다.</p>
                                <div>
                                    <span>2016-11-17&nbsp;&nbsp;&nbsp;13:52:01</span>
                                    <span>210.198.**.**</span>
                                    <div>
                                        <p class="like"><a href=""></a><span>35222</span></p>
                                        <p class="bad"><a href=""></a><span>4</span></p>
                                    </div>
                                </div>
                            </li>
                            <li class="commcomm"><!-- 댓글 -->
                                <h5>스포네비***</h5>
                                <p>그렇다면 kt의 투수진은 평범한 투수력으로 돌아갈 것인가? 긍정적인 지표들도 눈에 띈다.</br>바로 볼넷 %에서 4.7로 압도적인 1위를 달리는 데다 홈런 허용도 3개로 17개를 맞은 NC와 비교하면 거의 6배 정도의 안정된 수치를 이어가고 있다.</p>
                                <div>
                                    <span>2016-11-17&nbsp;&nbsp;&nbsp;13:52:01</span>
                                    <span>210.198.**.**</span>
                                    <div>
                                        <p class="like"><a href=""></a><span>35</span></p>
                                        <p class="bad"><a href=""></a><span>4</span></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="textarea_box">
                        <div><textarea name="" id="opinion_text" cols="" rows=""></textarea><a href="">입력</a></div>
                        <p>욕설 및 인격모독성 혹은 광고성 발언등은 <b>글삭제 및 제재</b>가 될 수 있습니다.</p>
                    </div>
                    <div class="close_btn"><a href=""></a></div>
                </div>
            </div>
            <!-- // 리스트 팝업 끝 -->
        </div>
    </div>

    <!-- 기본정보/인맥관리/통계 팝업창 시작 -->
    <div class="supervise_w">
        <div class="bg_b"></div>
        <div class="supervise">
            <ul class="menu">
                <li class="on sup1"><span></span><a href="">기본정보</a></li>
                <li class="sup2"><span></span><a href="">인맥 관리</a></li>
            </ul>
            <ul class="view">
                <li style="display:block;">
                    <h4>소개글</h4>
                    <input class="infor" onfocus="focus_in()" onfocusout="focus_out()" value="<?=($blog->profile=='')? '한글, 영문, 숫자 혼용가능 (한글 기준 25자 이내)' : $blog->profile;?>" type="text" name="profile"/>
                    <script>
                        var value='';
                        function focus_in(){
                            value=$('input[name=profile]').val();
                            $('input[name=profile]').val('');
                        }
                        function focus_out(){
                            if($('input[name=profile]').val()=='') $('input[name=profile]').val(value);
                        }
                    </script>
                    <h4>프로필 사진</h4>
                    <?=form_open_multipart('/main/do_upload/'.$user->id);?>
                        <div class="photo">
                            <div class="phoView"><img src="/public/uploads/<?=$user->id;?>/<?=$blog->profile_image;?>"></div>
                            <div class="fileDiv_w">
                                <input type="text" id="fakeFileTxt" class="fakeFileTxt" readonly="readonly" value="<?=$blog->profile_image;?>">
                                <div class="fileDiv">
                                    <input type="button" class="buttonImg" value="찾아보기"/>
                                    <input type="file" class="realFile" name="userfile" onchange="javascript:document.getElementById('fakeFileTxt').value = this.value">
                                </div>
                            </div>
                            <div class="p_btn_w">
                                <input type="submit" class="p_btn" value="등 록"/><a href="javascript:cancelFile();"><input type="button" class="p_btn" value="취 소"/></a>
                                <p>프로필 사진은 가로 160px 썸네일로 생성됩니다. <br/>gif, png 이미지 사용을 권장합니다. jpg는 화질이 저하될 수 있습니다.</p>
                            </div>
                            <script>
                                function cancelFile(){
                                    $('#fakeFileTxt').val('');
                                }
                            </script>
                        </div>
                    </form>
                    <div class="clear"></div>
                    <div class="seltbox_w">
                        <ul>
                            <li>
                                <label for="">사용자 프로필</label>
                                <div class="select left">
                                    <p class="off"><span class="pp network"><?=$blog->network_allow;?></span><span class="pa"></span></p>
                                    <ul>
                                        <li><a href="javascript:setNetwork('공개');">공개</a></li>
                                        <li><a href="javascript:setNetwork('비공개');">비공개</a></li>
                                    </ul>
                                </div>
                                <script>
                                    function setNetwork(str){
                                        $('.network').text(str);
                                        $(".select").find("ul").slideUp();
                                    }
                                </script>
                            </li>
                            <li><label for="">이름</label><input type="text" name="nick" id="nick" onfocus="focus_nick()" onfocusout="focus_out_nick();" value="<?=$user->nickname;?>"></li>
                            <script>
                                var nick='';
                                var validation=false;
                                function focus_nick(){
                                    nick=document.getElementById('nick').value;
                                    document.getElementById('nick').value='';
                                    $('input[name=nick] + span').remove();
                                }

                                function focus_out_nick(){
                                    var nickname=document.getElementById('nick');

                                    if(nickname.value==''){
                                        nickname.value=nick;
                                    }else if(nickname.value==nick){
                                    }else{
                                        var blank_pattern = /[\s]/g;
                                        if(blank_pattern.test(nickname.value)==true){
                                            $('input[name=nick] + span').remove();
                                            $('input[name=nick]').parent().append('<span style="color:red;">&nbsp;&nbsp;&nbsp;공백은 사용할 수 없습니다.</span>');
                                        }else{
                                            if (nickname.value.length < 2 || nickname.value.length > 10){
                                                $('input[name=nick] + span').remove();
                                                $('input[name=nick]').parent().append('<span style="color:red;">&nbsp;&nbsp;&nbsp;1자 이상, 10자 이하로 입력 해주세요.</span>');
                                            }else{
                                                var count=0;
                                                var special_pattern = /[`~!@#$%^&*|\\\'\";:\/?]/gi;
                                                if(special_pattern.test(nickname.value)==true){
                                                    $('input[name=nick] + span').remove();
                                                    $('input[name=nick]').parent().append('<span style="color:red;">&nbsp;&nbsp;&nbsp;특수문자는 사용할 수 없습니다.</span>');
                                                }else{
                                                    $.ajax({
                                                        type: 'POST',
                                                        dataType: 'text',
                                                        url: '/main/check_nick_ajax',
                                                        data: {nick: nickname.value},
                                                        success: function(data){
                                                            count=data;
                                                        },
                                                        complete: function(){
                                                            if(count>0){
                                                                $('input[name=nick] + span').remove();
                                                                $('input[name=nick]').parent().append('<span style="color:red;">&nbsp;&nbsp;&nbsp;이미 존재하는 이름입니다.</span>');
                                                            }else{
                                                                $('input[name=nick] + span').remove();
                                                                $('input[name=nick]').parent().append('<span style="color:green;">&nbsp;&nbsp;&nbsp;사용 가능한 닉네임입니다.</span>');

                                                                validation=true;
                                                            }
                                                        }
                                                    });
                                                }
                                            }
                                        }
                                    }
                                }
                            </script>
                            <li>
                                <label for="">지역</label>
                                <div class="select left">
                                    <p class="off"><span class="pp location"><?=($blog->location=='')? '선택':$blog->location;?></span><span class="pa"></span></p>
                                    <ul>
                                        <li><a href="javascript:setLocate('경기');">경기</a></li>
                                        <li><a href="javascript:setLocate('서울');">서울</a></li>
                                        <li><a href="javascript:setLocate('대전');">대전</a></li>
                                        <li><a href="javascript:setLocate('대구');">대구</a></li>
                                        <li><a href="javascript:setLocate('부산');">부산</a></li>
                                        <li><a href="javascript:setLocate('충북');">충북</a></li>
                                        <li><a href="javascript:setLocate('충남');">충남</a></li>
                                        <li><a href="javascript:setLocate('전라');">전라</a></li>
                                        <li><a href="javascript:setLocate('강원');">강원</a></li>
                                    </ul>
                                </div>
                                <script>
                                    function setLocate(str){
                                        $('.location').text(str);
                                        $(".select").find("ul").slideUp();
                                    }
                                </script>
                            </li>
                            <li>
                                <div class="div1">
                                    <label for="">주 관심 종목</label>
                                    <div class="select left">
                                        <p class="off"><span class="pp sport"><?=($blog->main_interest=='')? '선택':$blog->main_interest;?></span><span class="pa"></span></p>
                                        <ul>
                                            <li><a href="javascript:setSport('축구');">축구</a></li>
                                            <li><a href="javascript:setSport('야구');">야구</a></li>
                                            <li><a href="javascript:setSport('농구');">농구</a></li>
                                            <li><a href="javascript:setSport('배구');">배구</a></li>
                                            <li><a href="javascript:setSport('아이스하키');">아이스하키</a></li>
                                            <li><a href="javascript:setSport('기타');">기타</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <script>
                                    function setSport(str){
                                        $('.sport').text(str);
                                        $(".select").find("ul").slideUp();
                                    }
                                </script>
                                <div class="div1 fav">
                                    <label for="">주요 관심리그</label>
                                    <span><?=($blog->favorite_league=='')? '':$blog->favorite_league;?></span><a href="javascript:editFavoriteLeague();">설정하기</a>
                                </div>
                                <script>
                                    function editFavoriteLeague(){
                                        $('.fav > span, .fav > a').remove();
                                        $('.fav').append('<input type="text" name="fav_league" value="<?=$blog->favorite_league;?>">');
                                    }
                                </script>
                            </li>
                        </ul>
                    </div>
                    <div class="center_btn">
                        <a href="javascript:saveInfo();"><input type="button" class="p_btn" value="저 장"/></a><a href="javascript:closeBox();"><input type="button" class="p_btn" value="취 소"/></a>
                        <script>
                            function saveInfo(){
                                if(validation){
                                    var profile = $('input[name=profile]').val();
                                    var network = $('.network').text();
                                    var nick = $('input[name=nick]').val();
                                    var location = $('.location').text();
                                    var sport = $('.sport').text();
                                    var fav_league = $('input[name=fav_league]').val();

                                    $.ajax({
                                        type: 'POST',
                                        dataType: 'text',
                                        url: '/main/save_info_ajax',
                                        data: {
                                            id:<?=$user->id;?>,
                                            profile: profile,
                                            network: network,
                                            nick: nick,
                                            location: location,
                                            sport: sport,
                                            fav_league: fav_league
                                        },
                                        complete: function () {
                                            alert('저장되었습니다.');
                                            window.location.reload();
                                        }
                                    });
                                }else{
                                    alert('닉네임이 올바르지 않습니다.');
                                }
                            }

                            function closeBox(){
                                location.reload();
                            }
                        </script>
                    </div>
                </li>
                <li>
                    <h4>블로그 인맥관리</h4>
                    <p class="sup2_p"><span><b>인맥 신청</b> : <input type="radio" id="sp01_1" name="sp01" checked /><label for="sp01_1">수락</label><input type="radio" id="sp01_2" name="sp01"/><label for="sp01_2">미수락</label></span><span><b>쪽지 수신</b> : <input type="radio" id="sp02_1" name="sp02" checked /><label for="sp02_1">모두에게</label><input type="radio" id="sp02_2" name="sp02"/><label for="sp02_2">인맥만</label><input type="radio" id="sp02_3" name="sp02"/><label for="sp02_3">미수락</label></span></p>
                    <div class="sup2_view_w">
                        <ul class="redMenu menu">
                            <li class="sup2m1 on"><a href="">내가 등록한 인맥</a></li>
                            <li class="sup2m2"><a href="">나를 등록한 인맥</a></li>
                            <li class="sup2m3"><a href="">블랙리스트</a></li>
                        </ul>
                        <ul class="view">
                            <li style="display:block;"><!-- 내가 등록한 인맥 -->
                                <p><input  onfocus="this.value=''; return true" value="아이디를 검색하세요" type="text" /><input type="button" /></p>
                                <table class="table02">
                                    <caption></caption>
                                    <colgroup><col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width="110px"/></colgroup>
                                    <tr>
                                        <th>닉네임</th>
                                        <th>포인트</th>
                                        <th>전적</th>
                                        <th>최근포스트</th>
                                        <th>인맥추가일</th>
                                        <th>접속상태</th>
                                        <th>새글 알림</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff">OFF</span></td>
                                        <td><span class="bell"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff">OFF</span></td>
                                        <td><span class="bell"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff">OFF</span></td>
                                        <td><span class="bell"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff">OFF</span></td>
                                        <td><span class="bell"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                </table>
                                <div class="btn_w">
                                    <span class="all_btn"><input type="checkbox" id="all" /><label for="all">전체선택</label></span>
                                    <a href="" class="garbage_btn"><span></span>인맥끊기</a>
                                    <a href="" class="bell_btn"><span></span>알람변경</a>
                                </div>
                                <div class="page_w">
                                    <ul class="page">
                                        <li class="on"><a href="">1</a></li>
                                        <li><a href="">2</a></li>
                                        <li><a href="">3</a></li>
                                        <li><a href="">4</a></li>
                                        <li><a href="">5</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><!-- 나를 등록한 인맥 -->
                                <p><input  onfocus="this.value=''; return true" value="아이디를 검색하세요" type="text" /><input type="button" /></p>
                                <table class="table02">
                                    <caption></caption>
                                    <colgroup><col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width="110px"/></colgroup>
                                    <tr>
                                        <th>닉네임</th>
                                        <th>포인트</th>
                                        <th>전적</th>
                                        <th>최근포스트</th>
                                        <th>인맥추가일</th>
                                        <th>접속상태</th>
                                        <th>새글 알림</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff">OFF</span></td>
                                        <td><span class="bell"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff">OFF</span></td>
                                        <td><span class="bell"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff">OFF</span></td>
                                        <td><span class="bell"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff">OFF</span></td>
                                        <td><span class="bell"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                </table>
                                <div class="btn_w">
                                    <span class="all_btn"><input type="checkbox" id="all" /><label for="all">전체선택</label></span>
                                    <a href="" class="plus_btn"><span></span>인맥추가</a>
                                    <a href="" class="bell_btn"><span></span>알람변경</a>
                                </div>
                                <div class="page_w">
                                    <ul class="page">
                                        <li class="on"><a href="">1</a></li>
                                        <li><a href="">2</a></li>
                                        <li><a href="">3</a></li>
                                        <li><a href="">4</a></li>
                                        <li><a href="">5</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><!-- 블랙리스트 -->
                                <p><input  onfocus="this.value=''; return true" value="아이디를 검색하세요" type="text" /><input type="button" /></p>
                                <table class="table02">
                                    <caption></caption>
                                    <colgroup><col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width=""/><col width="110px"/></colgroup>
                                    <tr>
                                        <th>닉네임</th>
                                        <th>포인트</th>
                                        <th>전적</th>
                                        <th>최근포스트</th>
                                        <th>인맥추가일</th>
                                        <th>접속상태</th>
                                        <th>새글 알림</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff">OFF</span></td>
                                        <td><span class="bell"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff">OFF</span></td>
                                        <td><span class="bell"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff">OFF</span></td>
                                        <td><span class="bell"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff red">ON</span></td>
                                        <td><span class="bell on"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" id="" /><label for=""><b>마루텐텐2502</b></label></td>
                                        <td>21552 Point</td>
                                        <td>5151<b>G</b> 3333<b>W</b> 2222<b>L</b></td>
                                        <td>2017.10.15</td>
                                        <td>2017.10.15</td>
                                        <td><span class="onoff">OFF</span></td>
                                        <td><span class="bell"></span></td>
                                        <td><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></td>
                                    </tr>
                                </table>
                                <div class="btn_w">
                                    <span class="all_btn"><input type="checkbox" id="all" /><label for="all">전체선택</label></span>
                                    <a href="" class="B_btn"><span></span>블랙리스트 해지</a>
                                </div>
                                <div class="page_w">
                                    <ul class="page">
                                        <li class="on"><a href="">1</a></li>
                                        <li><a href="">2</a></li>
                                        <li><a href="">3</a></li>
                                        <li><a href="">4</a></li>
                                        <li><a href="">5</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="close_btn"><a href=""></a></div>
        </div>
    </div>
    <!-- // 기본정보/인맥관리/통계 팝업창 끝 -->

    <!-- 이웃새글보기 시작 -->
    <div class="neighbor_w">
        <div class="bg_b"></div>
        <div class="neighbor">
            <h3>이웃 새글 보기</h3>
            <p>최근 1일간 인맥의 새 글이 <span>28개</span> 있습니다.</p>
            <div class="select right">
                <p class="off"><span class="pp">최근 1일</span><span class="pa"></span></p>
                <ul>
                    <li><a href="">최근 1일</a></li>
                    <li><a href="">최근 일주일</a></li>
                </ul>
            </div>
            <ul>
                <li>
                    <a href=""><img src="/public/lib/image/blog/img07.jpg" alt="" /></a>
                    <h4><a href="">즐거웠던 정글리안 4기 발대식 후기<span>(51)</span></a></h4>
                    <div><span class="red">마야리언</span><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></div>
                    <span>등록일 : 2017.05.07</span>
                    <p><a href="">지난달 가장 핫했던 서포터스 모집 글이 정글리안 서포터즈글이 아니었을까 싶어요. 수백 명이 넘는 <br />지원자들이 참여했고 그중에 25명이 선발됐는데요. 트래블러버역시 정글리안 4기에 선발이 돼서 서울에....</a></p>
                </li>
                <li>
                    <a href=""><img src="/public/lib/image/blog/img07.jpg" alt="" /></a>
                    <h4><a href="">즐거웠던 정글리안 4기 발대식 후기<span>(51)</span></a></h4>
                    <div><span class="red">마야리언</span><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></div>
                    <span>등록일 : 2017.05.07</span>
                    <p><a href="">지난달 가장 핫했던 서포터스 모집 글이 정글리안 서포터즈글이 아니었을까 싶어요. 수백 명이 넘는 <br />지원자들이 참여했고 그중에 25명이 선발됐는데요. 트래블러버역시 정글리안 4기에 선발이 돼서 서울에....</a></p>
                </li>
                <li>
                    <a href=""><img src="/public/lib/image/blog/img07.jpg" alt="" /></a>
                    <h4><a href="">즐거웠던 정글리안 4기 발대식 후기<span>(51)</span></a></h4>
                    <div><span class="red">마야리언</span><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></div>
                    <span>등록일 : 2017.05.07</span>
                    <p><a href="">지난달 가장 핫했던 서포터스 모집 글이 정글리안 서포터즈글이 아니었을까 싶어요. 수백 명이 넘는 <br />지원자들이 참여했고 그중에 25명이 선발됐는데요. 트래블러버역시 정글리안 4기에 선발이 돼서 서울에....</a></p>
                </li>
                <li>
                    <a href=""><img src="/public/lib/image/blog/img07.jpg" alt="" /></a>
                    <h4><a href="">즐거웠던 정글리안 4기 발대식 후기<span>(51)</span></a></h4>
                    <div><span class="red">마야리언</span><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></div>
                    <span>등록일 : 2017.05.07</span>
                    <p><a href="">지난달 가장 핫했던 서포터스 모집 글이 정글리안 서포터즈글이 아니었을까 싶어요. 수백 명이 넘는 <br />지원자들이 참여했고 그중에 25명이 선발됐는데요. 트래블러버역시 정글리안 4기에 선발이 돼서 서울에....</a></p>
                </li>
                <li>
                    <a href=""><img src="/public/lib/image/blog/img07.jpg" alt="" /></a>
                    <h4><a href="">즐거웠던 정글리안 4기 발대식 후기<span>(51)</span></a></h4>
                    <div><span class="red">마야리언</span><a href="" class="blog_btn"></a><a href="" class="message_btn"></a><a href="" class="B_btn"></a></div>
                    <span>등록일 : 2017.05.07</span>
                    <p><a href="">지난달 가장 핫했던 서포터스 모집 글이 정글리안 서포터즈글이 아니었을까 싶어요. 수백 명이 넘는 <br />지원자들이 참여했고 그중에 25명이 선발됐는데요. 트래블러버역시 정글리안 4기에 선발이 돼서 서울에....</a></p>
                </li>
            </ul>
            <div class="page_w pt10">
                <ul class="page center">
                    <li class="on"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li><a href="">5</a></li>
                </ul>
            </div>
            <div class="close_btn"><a href=""></a></div>
        </div>
    </div>
    <!-- // 이웃새글보기 팝업창 끝 -->

    <!-- 포스트쓰기 시작 -->
    <div class="post_w">
        <div class="bg_b"></div>
        <div class="post">
            <h3>새글쓰기<span>재야의 분석</span></h3>
            <form action="/main/test" id="form_text">
                <ul class="checkboxMenu">
                    <li class="on"><a href="">일반 글쓰기</a></li>
                </ul>
                <div class="box02">
                    <div class=""><textarea name="ir1" id="ir1" rows="5" cols="100"></textarea></div>
                </div>
                <div class="tag_div">
                    <p class="tag01"><span class="tag_span">TAG</span><span class="box"><span>#프로야구</span><span>#프야</span><span>#승패</span></span></p>
                </div>
                <div class="relative ml15"><a href="" class="gray_btn">취소하기</a><a href="javascript:submitContents();" class="red_btn">저장하기</a></div>
                <p class="red right">※ 욕설 및 타인에 대한 인격모독성 발언 혹은 광고성 발언등은 <b>글삭제 및 제재</b>가 될 수 있습니다.</p>
                <div class="close_btn"><a href=""></a></div>
            </form>
        </div>
    </div>
</div>
</body>
<script type="text/javascript">
    //list_follow Silde
    jQuery(document).ready(function() {
        //Slide Gallery 슬라이딩 초기화
        jQuery(".list_wrap").width("235"*parseInt(jQuery(".list_wrap ul").size())+"px");
        jQuery(".list_wrap ul:last").prependTo(".list_wrap");
        jQuery(".list_wrap").css("margin-left","-235px");

        //Silde Gallery의 prev버튼
        jQuery("button.btn_prev").click(function() {
            jQuery(".list_wrap").animate({
                marginLeft:"+=235px"
            },"swing",function() {
                jQuery(".list_wrap ul:last").prependTo(".list_wrap");
                jQuery(".list_wrap").css("margin-left","-235px");
                jQuery(".list_wrap ul li").removeClass();
            });
        });

        //Silde Gallery의 next버튼
        jQuery("button.btn_next").click(function() {
            jQuery(".list_wrap").animate({
                marginLeft:"-=235px"
            },"swing",function() {
                jQuery(".list_wrap ul:first").appendTo(".list_wrap");
                jQuery(".list_wrap").css("margin-left","-235px");
                jQuery(".list_wrap ul li").removeClass();
            });
        });

        $(".services").click(function(){
            $(".servicesbox_w").slideToggle();
            return false;
        });

        //포스트쓰기 팝업열기
        $(" a.btn_post ").click(function(){
            $(".post_w").show();
            $(".post_w .bg_b").fadeIn();
            $(".post_w .post").slideDown();
            return false;
        });

        //포스트쓰기 팝업닫기
        $(".post_w .close_btn").click(function(){
            $(".post_w").slideUp();
            $(".post_w .bg_b").slideUp();
            $(".post_w .post").slideUp();
            return false;
        });

        //리스트 팝업열기
        $(".commt_box > p > a ").click(function(){
            $(".bloglist_view_w").show();
            $(".bloglist_view_w .bg_b").fadeIn();
            $(".bloglist_view_w .bloglist_view").slideDown();
            return false;
        });
        $(".bloglist .img_box ").click(function(){
            $(".bloglist_view_w").show();
            $(".bloglist_view_w .bg_b").fadeIn();
            $(".bloglist_view_w .bloglist_view").slideDown();
            return false;
        });

        //리스트 팝업닫기
        $(".bloglist_view .close_btn").click(function(){
            $(".bloglist_view_w").slideUp();
            $(".bloglist_view_w .bg_b").slideUp();
            $(".bloglist_view_w .bloglist_view").slideUp();
            return false;
        });

        //기본정보 팝업열기
        $(" a.setting ").click(function(){
            $(".supervise_w").show();
            $(".supervise_w .bg_b").fadeIn();
            $(".supervise_w .supervise").slideDown();
            return false;
        });

        //기본정보 팝업닫기
        $(".supervise_w .close_btn").click(function(){
            $(".supervise_w").slideUp();
            $(".supervise_w .bg_b").slideUp();
            $(".supervise_w .supervise").slideUp();
            return false;
        });

        //이웃새글보기 팝업열기
        $(" a.neighbor_btn ").click(function(){
            $(".neighbor_w").show();
            $(".neighbor_w .bg_b").fadeIn();
            $(".neighbor_w .neighbor").slideDown();
            return false;
        });

        //이웃새글보기 팝업닫기
        $(".neighbor_w .close_btn").click(function(){
            $(".neighbor_w").slideUp();
            $(".neighbor_w .bg_b").slideUp();
            $(".neighbor_w .neighbor").slideUp();
            return false;
        });

        //기본정보 팝업 메뉴menu
        for(var i=1;i<4;i++){
            (function (k){
                $(".supervise ul.menu > li.sup" + k ).click(function(){
                    $(".supervise > .menu > li").removeClass("on");
                    $(this).addClass("on");
                    $(".supervise > .view > li").css("display","none");
                    $(".supervise > .view > li").eq(k-1).css("display","block");
                    return false;
                });
            }(i));
        };

        //기본정보 팝업 메뉴menu - 인맥관리메뉴
        for(var i=1;i<4;i++){
            (function (k){
                $(".sup2_view_w ul.menu > li.sup2m" + k ).click(function(){
                    $(".sup2_view_w > .menu > li").removeClass("on");
                    $(this).addClass("on");
                    $(".sup2_view_w > .view > li").css("display","none");
                    $(".sup2_view_w > .view > li").eq(k-1).css("display","block");
                    return false;
                });
            }(i));
        };

        //기본정보 팝업 메뉴menu - 일별 통계메뉴
        for(var i=1;i<4;i++){
            (function (k){
                $(".sup3_view_w ul.menu > li.sup3m" + k ).click(function(){
                    $(".sup3_view_w > .menu > li").removeClass("on");
                    $(this).addClass("on");
                    $(".sup3_view_w > .view > li").css("display","none");
                    $(".sup3_view_w > .view > li").eq(k-1).css("display","block");
                    return false;
                });
            }(i));
        };

        //textarea_box input
        $('#opinion_text').click(function(){
            var state = $('.opinion_text').css('display');
            if(state == 'none'){
                $('#opinion_text').removeClass('on');
            }else{
                $('#opinion_text').addClass('on');
            }
        });

        //select
        $(".select p").click(function(){
            if($(this).attr("class")=="on"){
                $(this).removeClass("on").addClass("off");
                $(".select").find("ul").slideUp();
            }else if($(this).attr("class")=="off"){
                $(".select p").removeClass("on").addClass("off");
                $(this).removeClass("off").addClass("on");
                $(".select").find("ul").slideUp();
                $(this).parent().find("ul").slideDown();
            }
            return false;
        });
    });
    $(".follow").tabs();

    /* SMART EDITOR 2.9 */
    var oEditors = [];
    nhn.husky.EZCreator.createInIFrame({
        oAppRef: oEditors,
        elPlaceHolder: "ir1",
        sSkinURI: "/public/lib/se2/SmartEditor2Skin.html",
        fCreator: "createSEditor2"
    });
    function submitContents(){
        oEditors.getById["ir1"].exec("UPDATE_CONTENTS_FIELD", []);

        alert(document.getElementById("ir1").value);
        $.ajax({
            type:'POST',
            dataType:'text',
            url:'/main/test',
            data:{content:document.getElementById("ir1").value}
        });
    }
</script>
</html>