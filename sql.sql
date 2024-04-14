INSERT INTO gs_an_table(id,name,email,age,naiyou,indate)VALUES(NULL,'test1','test1@test.jp',30,'test',sysdate()) ;

INSERT INTO gs_an_table(id,name,email,age,naiyou,indate)VALUES(NULL,'test2','test2@test.jp',40,'test',sysdate()) ;

INSERT INTO gs_an_table(id,name,email,age,naiyou,indate)VALUES(NULL,'test3','test3@test.jp',50,'test',sysdate()) ;

INSERT INTO gs_an_table(id,name,email,age,naiyou,indate)VALUES(NULL,'test4','test4@test.jp',10,'test',sysdate()) ;

INSERT INTO gs_an_table(id,name,email,age,naiyou,indate)VALUES(NULL,'test5','test5@test.jp',20,'test',sysdate()) ;

INSERT INTO gs_an_table(id,name,email,age,naiyou,indate)VALUES(NULL,'test6','test6@test.jp',30,'test',sysdate()) ;

INSERT INTO gs_an_table(id,name,email,age,naiyou,indate)VALUES(NULL,'test7','test7@test.jp',40,'test',sysdate()) ;

INSERT INTO gs_an_table(id,name,email,age,naiyou,indate)VALUES(NULL,'test8','test8@test.jp',50,'test',sysdate()) ;

INSERT INTO gs_an_table(id,name,email,age,naiyou,indate)VALUES(NULL,'test9','test9@test.jp',10,'test',sysdate()) ;

INSERT INTO gs_an_table(id,name,email,age,naiyou,indate)VALUES(NULL,'test10','test10@test.jp',20,'test',sysdate()) ;

INSERT INTO gs_an_table(id,name,email,age,naiyou,indate)VALUES(:name,:email,:age,:naiyou,sysdate()) ; 


1_全部とってくる全指定
SELECT * FROM gs_an_table; 
2_部分指定
SELECT id, name, indate FROM gs_an_table;
3_条件指定 WHEREを使用して特定のエータをとってくる（この名前の人だけとか,カラムidが1の人だけデータをとってくるとか）
 SELECT * FROM gs_an_table WHERE id=1;
 SELECT * FROM gs_an_table WHERE id >3;
  SELECT * FROM gs_an_table WHERE id= 1 OR id = 2;
  SELECT * FROM gs_an_table WHERE id >= 3 AND id<=3; 
4_あいまい検索をする
前方一致
SELECT * FROM gs_an_table WHERE indate LIKE '2015-06%';
後方一致
SELECT * FROM gs_an_table WHERE email LIKE '%gmail.com';
あいまい検索
SELECT * FROM gs_an_table WHERE email LIKE '%@%';

ソートと制限
★表示をソートする DESC 降順　日付新しい順★
SELECT * FROM gs_an_table ORDER BY indate DESC;
表示をソートする ASC昇順
SELECT * FROM gs_an_table ORDER BY indate ASC;

表示をソートする DESC 降順の３つまで
SELECT * FROM gs_an_table ORDER BY indate DESC LIMIT 3;

