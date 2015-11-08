class FilteringValues
  def run
    puts "Enter a list of numbers, separated by spaces"
    numbers = gets.chomp
    puts filter_even_numbers(create_array_from_string(numbers)).join(" ")
  end

  def create_array_from_string(numbers_string)
    numbers_string.split(/ /).map { |n| n.to_i }
  end

  def filter_even_numbers(numbers)
    numbers.reject { |n| n.odd? }
  end
end
