class FilteringValues
  def filter_even_numbers(numbers)
    numbers.reject { |n| n.odd? }
  end
end
