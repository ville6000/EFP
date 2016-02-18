puts "Whats is your age?"
age = gets.chomp
limit = 18

puts (age.to_i >= limit) ? "You are old enough to drive" : "You are not old enough to legally drive"
