define(['./module.js','module1.js','module2.js'],function(m,m1,m2){
  console.log(m.abc);
  // console.log(m1);
  m1();
  console.log(m2);

  var abc = 'hello';
  console.log(123);

  // 从模块内部公开接口
  return {
    info : 'hi',
    msg : 'hello'
  }
});