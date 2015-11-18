require_relative 'retirement_calculator'

RSpec.describe RetirementCalculator, '#years_till_retirement' do
  it 'calculates years left' do
    r = RetirementCalculator.new
    expect(r.years_till_retirement(25, 65)).to eq(40)
  end

  it 'handles situation when user can already retire' do
    r = RetirementCalculator.new
    expect(r.years_till_retirement(70, 65)).to eq(0)
  end
end

RSpec.describe RetirementCalculator, '#retirement_year' do
  it 'calculates retirement year when there is years left' do
    r = RetirementCalculator.new
    expect(r.retirement_year(40)).to eq(Time.now.year + 40)
  end

  it 'calculates retirement year when there is no years left' do
    r = RetirementCalculator.new
    expect(r.retirement_year(0)).to eq(Time.now.year)
  end
end
