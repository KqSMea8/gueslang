/** How to avoid integer overflows using template metaprogramming.
  * Learnings from capn' proto issues
  */
 #include<iostream>
 using namespace std;

 template<uint64_t maxN, typename T>
 class Guarded {
   private:
 	  static_assert(maxN <= T(INT_MAX), "Possible overflow")
 	  T value;

 	 public:
 	 	template<uint64_t maxN, typename otherT>
 	 	inline constexpr Guarded(const Guarded<otherMax, otherT)& other) : value(other.value) {}
 };

int main() {

}