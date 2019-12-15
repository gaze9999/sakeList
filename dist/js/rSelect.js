
{/* <option value="1">北海道地方</option>
<option value="2">東北地方</option>
<option value="3">關東地方</option>
<option value="4">中部地方</option>
<option value="5">近畿地方</option>
<option value="6">中國地方</option>
<option value="7">四國地方</option>
<option value="8">九州地方</option>
<option value="9">沖繩地方</option> */}


let reg = $('#regions');
let prefectures = $('#prefectures');
let prefName = ["北海道", "青森縣", "岩手縣", "宮城縣", "秋田縣", "山形縣", "福島縣", "茨城縣", "栃木縣", "群馬縣", "埼玉縣", "千葉縣", "東京都", "神奈川縣", "新潟縣", "富山縣", "石川縣", "福井縣", "山梨縣", "長野縣", "岐阜縣", "靜岡縣", "愛知縣", "三重縣", "滋賀縣", "京都府", "大阪府", "兵庫縣", "奈良縣", "和歌山縣", "鳥取縣", "島根縣", "岡山縣", "廣島縣", "山口縣", "德島縣", "香川縣", "愛媛縣", "高知縣", "福岡縣", "佐賀縣", "長崎縣", "熊本縣", "大分縣", "宮崎縣", "鹿兒島縣", "沖繩縣"];
let prefNum = [1, 6, 7, 9, 7, 5, 4, 7, 1];
let prefSum = [0, 1 , 7, 14, 23, 30, 35, 39, 46];

function print(r) {
    for (i=0; i<pNum; i++) {
        prefectures.append(`<option value='${i+1}'>${prefName[pStart+i]}</option>`);
    }
}

reg.on('change', function(){
    rId = parseInt(reg.val());
    pNum = prefNum[rId-1];
    pStart = prefSum[rId-1]
    prefectures.html(`<option value="0" selected>全選</option>`);
    print(rId);
}); 