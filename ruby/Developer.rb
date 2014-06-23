class Developer
    def greet
        puts "Hello there!"
    end

    def proxy
        revealSecret
    end

    private

    def revealSecret
        puts "I code in MS Word"
    end
end

require "irb"
IRB.start
