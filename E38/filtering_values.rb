class FilteringValues
  def run
    puts "Enter a list of numbers, separated by spaces"
    numbers = gets.chomp
    output(filter_even_numbers(create_array_from_string(numbers)).join(" "))
  end

  def output(even_numbers)
    puts "The even numbers are #{even_numbers}"
  end

  def run_from_file(file_name)
    output(filter_even_numbers(get_values_from_file(file_name)).join(" "))
  end

  def create_array_from_string(numbers_string)
    numbers_string.split(/ /).map { |n| n.to_i }
  end

  def get_values_from_file(file_name)
    create_array_from_string(File.read(file_name))
  end

  # Constraints
  # Don't rely on language's built-in filter or similar enumeration feature
  def filter_even_numbers(numbers)
    even_numbers = Array.new
    numbers.each do |num|
      even_numbers.push(num) if (num % 2 == 0)
    end

    even_numbers
  end
end
