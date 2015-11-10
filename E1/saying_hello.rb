def run
  say(make_greeting(ask_name))
end

def make_greeting(name)
  "Hello, #{name}, nice to meet you!"
end

def say(greeting)
  puts greeting
end

def ask_name
  puts "What is your name?"
  gets.chomp
end

run
