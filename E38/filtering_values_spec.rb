require "./filtering_values"

RSpec.describe FilteringValues, "#filter_even_numbers" do
  it "filters even numbers from array" do
    even_numbers = [1,2,3,4,5,6,7,8,9,10]
    f = FilteringValues.new
    expect(f.filter_even_numbers(even_numbers)).to eq([2,4,6,8,10])

    even_numbers = [100, 123, 126, 234, 654]
    expect(f.filter_even_numbers(even_numbers)).to eq([100, 126, 234, 654])
  end

  it "reads values to array from file" do
    f = FilteringValues.new
    expect(f.get_values_from_file('values.txt')).to eq([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16])
  end
end
