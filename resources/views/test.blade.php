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
//$a29改 DB::select("select accountNum as 'accout', name from abolished_account_models union select accountNum, name as '名前' from account_tests order by accout");
//$a31改 DB::select("select accountNum from abolished_account_models intersect select accountNum from account_tests order by accountNum desc");
//$a32改 DB::select("select accountNum, balance - balance % 1000 as 千円以上の残高 from account_tests where balance > 50000000");
//$a33改 DB::insert("insert into account_tests values ('0622291', '加藤慶子', '1', 364000 + 3000, '2022-03-13')");
//$a34改 DB::select("select accountNum, balance - balance % 1000 as '千円以上の残高' from account_tests where balance > 50000000");
//$a35改 DB::insert("insert into account_tests values ('0622291', '加藤慶子', '1', 364000 + 3000, '2022-03-13')");
//$a38改 DB::select("select '別' || accountNum from account_tests where kind = '3' ");
//$a40改 DB::select("select accountNum, name, balance, case when balance < 100000 then 'A' when balance < 1000000 then 'B' when balance < 10000000 then 'C' else 'D' end as 'result' from account_tests" );
//$a41改 DB::select("select replace(name,' ','') as 'result' from account_tests where length(name) > 10");
//$a42改 DB::select("select name from account_tests where substring(name,1,3) like '%圭%' ");
//$a46改 DB::select("select length(cast(balance as char)) from account_tests");
//$a49改 DB::select("select avg(balance), sum(balance),count(balance) from account_tests");
//$a50改 DB::select("select count(*) from account_tests where kind in('2','3') and balance >= 5000000 ");
//$a53改 DB::select("select max(date),min(date) from account_tests");
//$a54改 DB::select("select max(date),min(date), kind from account_tests group by kind order by kind");
//$a55改 DB::select("select substring(accountNum,7,1) as 'グループ', count(*) as '件数' from account_tests group by substring(accountNum,7,1) order by count(*)");
//$a56改 DB::select("select max(balance), min(balance), substring(cast(date as char),1,4) from account_tests group by substring(cast(date as char),1,4) "); 
//$a57改 DB::select("select kind, sum(balance), count(balance) from account_tests group by kind having sum(balance) >= 500000000"); 
//$a58改 DB::select("select substring(name,1,1), count(account_id), avg(length(name)) from accounts group by substring(name,1,1) having count(account_id) < 10 or avg(length(name)) <= 4");
//$a59改 DB::update("update accounts set balance = (select (deposit - withdrawal) from transactions where accountNum = '1740602' and date = '2002-04-11') where account_id = '1740602' ");
//$a60改 DB::select("select balance, (select sum(deposit) from transactions where accountNum = '1740602' and date = '2020-01-23') as depositSum, (select sum(withdrawal) from transactions where accountNum = '1740602' and date = '2020-01-23') as withdrawlSum from accounts where account_id = '1740602' ");
//$a61改 DB::select("select account_id, name, balance from accounts where account_id in ( select accountNum from transactions where deposit >= 600000) ");
//$a62改 DB::select("select date from accounts where date > all ( select date from transactions ) "); 
//$a63改 DB::select("select name, date from accounts where account_id = '6823733' and (select sum(deposit) from transactions ) > 0 and (select sum(withdrawal) from transactions) > 0 group by date  "); 
//$a64改 DB::insert("insert into abolished_accounts select * from accounts where account_id =  '5555533';");
//$a64改 DB::delete("delete from accounts where account_id = '5555533'");
//$a65改 DB::select("select t.accountNum, t.date, c.cause, t.deposit, t.withdrawal from transactions as t join causes as c on t.cause_id = c.cause_id where t.accountNum in('1740602','1740602','6823733') order by t.accountNum, t.cause_id");
//$a66改 DB::select("select a.account_id, a.name, a.balance, t.date, t.deposit, t.withdrawal from accounts as a join transactions as t on a.account_id = t.accountNum where a.account_id = 1740602 order by t.date");
//$a67改 DB::select("select t.accountNum, a.name, a.balance from transactions as t join accounts as a on a.account_id = t.accountNum where t.date = '2020-03-01' ");
//$a68改 DB::select("select t.accountNum, coalesce(a.name,'解約済み'), coalesce(a.balance,0) from transactions as t left join accounts as a on t.accountNum = a.account_id  where t.date = '2020-03-01' ");
//$a69改 DB::select("select t.id, c.cause, t.date, t.accountNum from transactions as t right join causes as c on t.cause_id = c.cause_id order by c.cause_id");
//$a70改 DB::select("(select distinct t.cause_id from transactions as t left join causes as c on t.cause_id = c.cause_id) union (select distinct t.cause_id from transactions as t right join causes as c on t.cause_id = c.cause_id) order by cause_id");
//$a71改 DB::select("select a.account_id, a.name, a.balance, c.cause from accounts as a join transactions as t on a.account_id = t.accountNum join causes as c on t.cause_id = c.cause_id where a.account_id = 1740602 order by t.id");
//$a72改 DB::select("select a.account_id, a.name, a.balance, t.date, t.cause_id, t.deposit, t.withdrawal from accounts as a join transactions as t on a.account_id = t.accountNum where a.balance > 5000000 and t.deposit < 100000 and t.date > '2019-12-31' ");
//$a73改 DB::select("select a.account_id, a.name, a.balance, t.date, t.deposit from accounts as a join (select date, accountNum, deposit, withdrawal from transactions where deposit < 100000 and date > '2019-12-31') as t on a.account_id = t.accountNum where a.balance > 5000000 ");
//$a74改 DB::select("select a.account_id, e.times, e.date, a.name from accounts as a join (select accountNum, count(*) as times, date from transactions group by accountNum, date having count(*) >= 3 ) as e on a.account_id = e.accountNum");

//DB::insert("insert into causes values (12,'confidential')");
//DB::insert("insert into account_tests values ('0651233', '長野莉子', '1', 3333241, current_date)");
//DB::delete("delete from transactions where id = 1 " );
//DB::update("update accounts set balance = 5100000 where account_id = '1740602' ");
//DB::insert("insert into accounts values ('6823733', '小沢杏奈', '3', 773444, '2026-02-13')");
//DB::insert("insert into transactions values (36,9,'2020-03-01','0000012',6510,0)");
//$result = DB::select("select t.id, c.cause, t.date, t.accountNum from transactions as t right join causes as c on t.cause_id = c.cause_id order by c.cause_id");
//$result = DB::select("select a.account_id, a.name, a.balance, t.date, t.deposit from accounts as a join (select date, accountNum, deposit, withdrawal from transactions where deposit < 100000 and date > '2019-12-31') as t on a.account_id = t.accountNum where a.balance > 5000000 ");

//$result = DB::select("select a.account_id, e.times, e.date, a.name from accounts as a join (select accountNum, count(*) as times, date from transactions group by accountNum, date having count(*) >= 3 ) as e on a.account_id = e.accountNum");
$result = DB::select("select count(cause) as count from causes");
echo("count = ".$result[0]->count);
dump($result);

?>

@foreach ($users as $user)
    <p> {{ $user->name }}</p>
@endforeach

