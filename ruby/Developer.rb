class Coder
    def code
        puts "Code!"
    end
end

class Developer < Coder
    def develop
        puts "Develop!"
    end
end

seth = Developer.new
seth.code    # Output: "Code!"
seth.develop # Output: "Develop!"
