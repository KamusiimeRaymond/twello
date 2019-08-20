#nam = gets.chomp

#if nam == "Kamusiime"
	#

#else
	#puts "wrong password"
#end

#10.times do
#	puts "Yeey"
#end

#10.times do
#	$x=1
#end
#	puts $x
#constant
#TEAM = "Angels"
#TEAM = "Athletics"

#p TEAM
#class variable
#class MyClass
#	@@teams = ["A's","Tigers"]
#end

#puts "Name an animal"
#animal= gets.chomp

#puts "Name a noun"
#noun= gets.chomp

#p "The quick brown #{animal} jumped over the #{noun}"

#Lowercase and upper case
p "Astros".upcase   #ASTROS
p "Astros".downcase	#actros
p "Astros".swapcase	#aSTROS
p "Astros".reverse	#astroS

#case sesnsitivty
#to make it easy to search for something without it
#having to change, all go upcase and strings are compared
p "Milk".upcase
p "milk".upcase

m="Milk".upcase
p m





#substituting a string
str="The quick brown fox jumped over the quick dog"
#quick substituded for slow
p str.gsub! "quick","slow"
#the ! is going to make it unifrom for all the other times it will print
p str




#strip
str="  The quick brown fox jumped over the quick dog    "
#so many spaces and how to remove them
p str.strip




#split
#split any string into an array of individual strings
p str.split
#find number of strings
p str.split.size
#display all individual letters of letters
p str.split(//)
#number of all individual letters of letters
p str.split(//).size

