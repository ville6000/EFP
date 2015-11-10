class AddingNumbers
  def run
    puts "How many numbers you want to add?"
    prompt_count = gets.to_i

    numbers = prompt_numbers(prompt_count, Array.new)
    total = add_numbers(numbers)
    puts "The total is #{total}"
  end

  def prompt_numbers(prompt_count, numbers)
    puts "Enter as number:"
    numbers.push(gets.to_i)
    prompt_count -= 1

    if prompt_count > 0
      prompt_numbers(prompt_count, numbers)
    end

    numbers
  end

  def add_numbers(numbers)
    total = 0
    numbers.map{ |n| total += n }

    total
  end
end
