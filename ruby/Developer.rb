class Developer
    # Class variable
    @@devs_made = 0

    # Class method
    def self.devs_made
        @@devs_made
    end

    def initialize
        @@devs_made += 1
    end
end

puts Developer.devs_made # Output: 0

seth = Developer.new
puts Developer.devs_made # Output: 1

jarrett = Developer.new
puts Developer.devs_made # Output: 2
