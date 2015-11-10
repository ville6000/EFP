require "./adding_numbers"

RSpec.describe AddingNumbers, "#add_numbers" do
  it "calcualte sum of numbers" do
    a = AddingNumbers.new
    numbers = [1,2,3,4,5]
    expect(a.add_numbers(numbers)).to eq(15)
  end
end
