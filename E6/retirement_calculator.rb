class RetirementCalculator
  def run
    puts 'What is your current age?'
    current_age = gets.to_i

    puts 'At what age would you like to retire?'
    retirement_age = gets.to_i

    years_left = years_till_retirement(current_age, retirement_age)
    year_of_retirement = retirement_year(years_left)

    puts "You have #{years_left} left until you can retire. It' #{Time.now.year}, so you can retire in #{year_of_retirement}."

  end

  def years_till_retirement(current_age, retirement_age)
    years_left = retirement_age - current_age
    years_left > 0 ? years_left : 0
  end

  def retirement_year(years_left)
    Time.now.year + years_left
  end
end
