<?php
use Illuminate\Support\Facades\DB;

//$a1 = DB::select("select * from account_tests");
//$a2 = DB::select("select accountNum from account_tests");
//$a3 = DB::select("select accountNum, balance from account_tests");
//$a4 = DB::select("select * from account_tests");
//$a5 DB::select("update account_tests set name = 'xxxxxxx' where accountNum = '0696248' ");
//$a6 DB::select("update account_tests set balance = 99999999, date = '2022-03-01' ");
//$a7 DB::insert("insert into account_tests values ('0642191', '青木はるか', '1', 3640551, '2022-03-13')");
//$a8 DB::delete("delete from account_tests where name = 'xxxxxxx' " );
//$a9 DB::select("select * from account_tests where accountNum = '0642191'");
//$a11 DB::select("select * from account_tests where accountNum < '1000000'");
//$a12 DB::select("select * from account_tests where date < '2022-03-10'");
//$a13 DB::select("select * from account_tests where kind <> '1'");
//$a16 DB::select("select * from account_tests where name like '%青木%'");
//$a17 DB::select("select * from account_tests where date between '2022-03-01' and '2022-03-31'");
//$a18 DB::select("select * from account_tests where kind in('2','3')");
//$a22改 DB::select("select * from account_tests where accountNum between '2000000' and '2999999' or name like '%青木%' ");
//$a24 DB::select("select * from account_tests order by accountNum desc");
//$a25改 DB::select("select distinct balance from account_tests order by balance asc");
//$a26改 DB::select("select balance from account_tests order by balance asc, accountNum");
//$a27改 DB::select("select date from account_tests order by date asc limit 10");
//$a28改 DB::select("select balance from account_tests where balance < 99999999 order by balance asc limit 5 offset 10 ");
//$a31改 DB::select("select accountNum from abolished_account_models intersect select accountNum from account_tests order by accountNum desc");
//$a32改 DB::select("select accountNum, balance - balance % 1000 as 千円以上の残高 from account_tests where balance > 50000000");
//$a33改 DB::insert("insert into account_tests values ('0622291', '加藤慶子', '1', 364000 + 3000, '2022-03-13')");
//$a34改 DB::select("select accountNum, balance - balance % 1000 as 千円以上の残高 from account_tests where balance > 50000000");
//$a35改 DB::select("select '別' || accountNum from account_tests where kind = '3' ");
//$result = DB::select("select * from account_tests where accountNum between '2000000' and '2999999' or name like '%青木%' ");
//$result = DB::select("select * from account_tests");

//DB::insert("insert into causes values (9,'others')");
//$result = DB::select("select balance from account_tests where balance < 99999999 order by balance asc limit 5 offset 10 ");
//DB::insert("insert into abolished_account_models values ('0642191', '青木はるか', '1', 4551, '2023-03-13')");
//$result = DB::select("select accountNum as accout, name from abolished_account_models union select accountNum, name from account_tests order by accountNum desc");
//$result = DB::select("select name as 名前, balance as 金額 from abolished_account_models");
//DB::insert("insert into account_tests values ('0622291', '加藤慶子', '1', 364000 + 3000, '2022-03-13')");

$result = DB::select("select accountNum, name, balance, case when balance < 100000 then 'A' when balance < 1000000 then 'B' when balance < 10000000 then 'C' end from account_tests" );
//$result = DB::select("select * from account_tests");
dd($result);

?>

@foreach ($users as $user)
    <p> {{ $user->name }}</p>
@endforeach

