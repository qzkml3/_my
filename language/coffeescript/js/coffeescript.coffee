###
  여러줄 주석
### #

# 한줄주석
#한줄


# 스트링 템플릿
inner_str = "kkk"

str = "
  #{inner_str} 이것이 바로 대단한 스트링 ㅖ속 되는가
 블럭이다 #{ inner_str }ddd...
"


# 객체
obj = {aaa: "a", bbb: "b", ccc: "c"}

obj2 = {
  aaa: "a"
  bbb: "b"
  ccc: "c"
}

# 배열
arr = [1, 2, 3]

arr2 = [
  1
  2
  3
]



# 함수 정의
func = () -> console.log "func exec"

# 함수 실행
func()
#alert(str)
alert str
console.log obj if -1

console.log "arr  : #{arr}"