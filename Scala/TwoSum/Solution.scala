object Solution {
  def main(args: Array[String]) = {
    println(twoSum(Array(2,7,11,15), 9).toList)
  }

  def twoSum(nums: Array[Int], target: Int): Array[Int] = {
    var map = Map.empty[Int, Int]

    for ((v, i) <- nums.zipWithIndex) {
      map.get(v) match {
        case Some(r) => return Array[Int](r, i)
        case None => map ++= Map((target - v) -> i)
      }
    }

    Array[Int](-1, -1)
  }
}
